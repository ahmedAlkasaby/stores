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

    // price
    'price',
    'offer_price',
    'offer_amount',
    'offer_percent',
    'shipping_cost',

    // order limits
    'start',
    'skip',
    'amount',
    'max_order',

    // status flags
    'active',
    'feature',
    'new',
    'special',
    'filter',
    'sale',
    'late',
    'stock',
    'free_shipping',
    'returned',

    // dates
    'date_start',
    'date_end',


    // foreign keys
    'service_id',
    'unit_id',
    'brand_id',
    'size_id',
    'parent_id',

    // order
    'order_id',
];


    public function categories()
    {
        return $this->belongsToMany(Category::class,'category_product','product_id','category_id')->withTimestamps();
    }


    public function service()
    {
        return $this->belongsTo(Service::class, 'service_id', 'id');
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
            ->whereDate('date_start', '<=', $type_app == 'app' ? now() : $request->date_start)
            ->whereDate('date_end', '>=', $type_app == 'app' ? now() : $request->date_end)
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

    public function scopeApplyServiceFilters($query, $request)
    {


        if ($request->filled('service_id')) {
            $query->where('service_id', $request->service_id);
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
    public function scopeApplyNewFilter($query, $request)
    {
        if ($request->filled('new')) {
            $query->where('new', $request->new);
        }
        return $query;
    }
    public function scopeApplySpecialFilter($query, $request)
    {
        if ($request->filled('special')) {
            $query->where('special', $request->special);
        }
        return $query;
    }
    public function scopeApplyFilterFilter($query, $request)
    {
        if ($request->filled('filter')) {
            $query->where('filter', $request->filter);
        }
        return $query;
    }
    public function scopeApplySaleFilter($query, $request)
    {
        if ($request->filled('sale')) {
            $query->where('sale', $request->sale);
        }
        return $query;
    }
    public function scopeApplyStockFilter($query, $request)
    {
        if ($request->filled('stock')) {
            $query->where('stock', $request->stock);
        }
        return $query;
    }
    public function scopeApplyFreeShippingFilter($query, $request)
    {
        if ($request->filled('free_shipping')) {
            $query->where('free_shipping', $request->free_shipping);
        }
        return $query;
    }
    public function scopeApplyReturnedFilter($query, $request)
    {
        if ($request->filled('returned')) {
            $query->where('returned', $request->returned);
        }
        return $query;
    }

    public function scopeApplyLateFilter($query, $request)
    {
        if ($request->filled('late')) {
            $query->where('late', $request->late);
        }
        return $query;
    }

    public function scopeApplyDateFilters($query, $request)
    {
        if ($request->filled('date_start')) {
            $query->where('date_start', '>=', $request->date_start);
        }

        if ($request->filled('date_end')) {
            $query->where('date_end', '<=', $request->date_end);
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
            ->applyBasicFilters($request, $type_app)
            ->applySearch($request)
            ->scopeApplyServiceFilters($request)
            ->applyCategoryFilter($request)
            ->applyPriceFilters($request)
            ->applyFeatureFilter($request)
            ->applyNewFilter($request)
            ->applySpecialFilter($request)
            ->applyFilterFilter($request)
            ->applySaleFilter($request)
            ->applyLateFilter($request)
            ->applyStockFilter($request)
            ->applyFreeShippingFilter($request)
            ->applyReturnedFilter($request)
            ->applySorting($request)
            ->applyDateFilters($request)
            ;
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

    public function reviews()
    {
        return $this->morphMany(Review::class, 'reviewable');
    }

    public function averageRating()
    {
        return $this->reviews()->where('active', true)->avg('rating') ?? 0;
    }


}
