<?php

namespace App\Models;

use Illuminate\Support\Facades\Auth;



class Product extends MainModel
{
    protected $fillable = [
        'code',
        'link',
        'name',
        'description',
        'image',
        'video',
        'background',
        'color',
        'price',
        'start',
        'skip',
        'order_limit',
        'max_order',
        'stock_amount',
        'max_amount',
        'active',
        'feature',
        'date_start',
        'date_expire',
        'day_start',
        'day_end',
        'unit_id',
        'brand_id',
        'size_id',
        'parent_id',
        'order_id',
        'store_id',
    ];

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }


    public function store()
    {
        return $this->belongsTo(Store::class, 'store_id', 'id');
    }
    public function unit()
    {
        return $this->belongsTo(Unit::class, 'unit_id', 'id');
    }
    public function size()
    {
        return $this->belongsTo(Size::class, 'size_id', 'id');
    }
    public function brand()
    {
        return $this->belongsTo(Brand::class, 'brand_id', 'id');
    }

    public function parent()
    {
        return $this->belongsTo(Product::class, 'parent_id', 'id');
    }
    public function children()
    {
        return $this->hasMany(Product::class, 'parent_id', 'id');
    }

    public function wishlists()
    {
        return $this->belongsToMany(User::class,'wishlists','product_id','user_id')->withTimestamps();
    }





    public function scopeFilter($query, $request = null,$type_app='app')
    {
        $request = $request ?? request();

        // فلترة المنتجات الأساسية فقط

        if( $type_app == 'app' ){
            $query->whereNull('parent_id');
            $query->where('active', true);
            $query->where('date_start', '<=', now());
            $query->where('date_expire', '>=', now());
            $query->where('day_start', '<=', now()->format('H:i:s'));
            $query->where('day_end', '>=', now()->format('H:i:s'));
        }



        // ترتيب افتراضي حسب order_id
        $query->orderByDesc('order_id');

        // البحث
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', '%' . $search . '%')
                  ->orWhere('description', 'like', '%' . $search . '%')
                  ->orWhere('price', 'like', '%' . $search . '%');
            });
        }

        // فلترة حسب نوع المتجر
        if ($request->filled('store_type_id')) {
            $query->whereHas('store.storeType', function ($q) use ($request) {
                $q->where('id', $request->store_type_id);
            });
        }

        // فلترة حسب المتجر
        if ($request->filled('store_id')) {
            $query->where('store_id', $request->store_id);
        }

        // فلترة حسب التصنيف (Many to Many)
        if ($request->filled('category_id')) {
            $query->whereHas('categories', function ($q) use ($request) {
                $q->where('category_id', $request->category_id);
            });
        }

        // السعر
        if ($request->filled('min_price')) {
            $query->where('price', '>=', $request->min_price);
        }

        if ($request->filled('max_price')) {
            $query->where('price', '<=', $request->max_price);
        }

        // حالات عامة
        if ($request->filled('active')) {
            $query->where('active', $request->active);
        }

        if ($request->filled('feature')) {
            $query->where('feature', $request->feature);
        }

        // الترتيب
        if ($request->filled('sort_by')) {
            switch ($request->sort_by) {
                case 'latest':
                    $query->orderByDesc('order_id');
                    break;
                case 'oldest':
                    $query->orderBy('order_id', 'asc');
                    break;
                case 'highest_price':
                    $query->orderBy('price', 'desc');
                    break;
                case 'lowest_price':
                    $query->orderBy('price', 'asc');
                    break;
            }
        }

        return $query;
    }



    public function qtyInCart(): int
    {
        $userId = Auth::guard('api')->id();
        if ($userId) {
            return CartItem::where('product_id', $this->id)
                ->where('user_id', $userId)
                ->sum('qty');
        }
        return 0;
    }

    public function checkProductInWishlists(): bool
    {
        $userId = Auth::guard('api')->id();
        return $userId && $this->wishlists()->where('user_id', $userId)->exists();
    }


}
