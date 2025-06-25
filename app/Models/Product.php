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
        return $this->belongsToMany(Category::class,'category_product','product_id','category_id')->withTimestamps();
    }


    public function store()
    {
        return $this->belongsTo(Store::class, 'store_id', 'id');
    }

    public function storeType()
    {
        return $this->hasOneThrough(StoreType::class,Store::class, 'id', 'id', 'store_id', 'store_type_id');
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

    public function scopeApplyBasicFilters($query, $request, $type_app)
    {
        return $query
            ->where('active', $type_app == 'app' ? true : $request->active)
            ->where('date_start', '<=', $type_app == 'app' ? now() : $request->date_start)
            ->where('date_expire', '>=', $type_app == 'app' ? now() : $request->date_expire)
            ->where('day_start', '<=', $type_app == 'app' ? now()->format('H:i:s') : $request->day_start)
            ->where('day_end', '>=', $type_app == 'app' ? now()->format('H:i:s') : $request->day_end)
            ->orderBy('order_id', 'asc');
    }

    public function scopeApplySearch($query, $request)
    {
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', '%' . $search . '%')
                  ->orWhere('description', 'like', '%' . $search . '%')
                  ->orWhere('price', 'like', '%' . $search . '%');
            });
        }

        return $query;
    }

    public function scopeApplyStoreFilters($query, $request)
    {
        if ($request->filled('store_type_id')) {
            $query->whereHas('store.storeType', function ($q) use ($request) {
                $q->where('id', $request->store_type_id);
            });
        }

        if ($request->filled('store_id')) {
            $query->where('store_id', $request->store_id);
        }

        return $query;
    }

    public function scopeApplyCategoryFilter($query, $request)
    {
        if ($request->filled('category_id')) {
            $query->whereHas('categories', function ($q) use ($request) {
                $q->where('category_id', $request->category_id);
            });
        }

        return $query;
    }

    public function scopeApplyPriceFilters($query, $request)
    {
        if ($request->filled('min_price')) {
            $query->where('price', '>=', $request->min_price);
        }

        if ($request->filled('max_price')) {
            $query->where('price', '<=', $request->max_price);
        }

        return $query;
    }

    public function scopeApplyFeatureFilter($query, $request)
    {
        if ($request->filled('feature')) {
            $query->where('feature', $request->feature);
        }

        return $query;
    }

    public function scopeApplySorting($query, $request)
    {
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






    public function scopeFilter($query, $request = null, $type_app = 'app')
    {
        $request = $request ?? request();

        return $query
            // ->applyBasicFilters($request, $type_app)
            ->applySearch($request)
            ->applyStoreFilters($request)
            ->applyCategoryFilter($request)
            ->applyPriceFilters($request)
            ->applyFeatureFilter($request)
            ->applySorting($request);
    }




    public function countInCart(): int
    {
        $userId = Auth::guard('api')->id();
        if ($userId) {
            return CartItem::where('product_id', $this->id)
                ->where('user_id', $userId)
                ->sum('qty');
        }
        return 0;
    }

    public function checkProductInCart(): bool
    {
        $userId = Auth::guard('api')->id();
        return $userId && CartItem::where('product_id', $this->id)->where('user_id', $userId)->exists();
    }

    public function checkProductInWishlists(): bool
    {
        $userId = Auth::guard('api')->id();
        return $userId && $this->wishlists()->where('user_id', $userId)->exists();
    }

    public function productIdInCart(): int
    {
        $userId = Auth::guard('api')->id();
        if ($userId) {
            return CartItem::where('product_id', $this->id)
                ->where('user_id', $userId)
                ->pluck('id')
                ->first();
        }
        return 0;
    }


}
