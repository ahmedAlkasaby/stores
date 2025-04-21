<?php

namespace App\Models;

use Illuminate\Support\Facades\Auth;



class Product extends MainModel
{
    protected $fillable = [
        'name',
        'description',
        'image',
        'price',
        'qty',
        'category_id',
        'store_id',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function store()
    {
        return $this->belongsTo(Store::class, 'store_id', 'id');
    }

    public function wishlists()
    {
        return $this->belongsToMany(User::class,'wishlists','product_id','user_id')->withTimestamps();
    }





    public function scopeFilter($query, $request = null)
    {
        $request = $request ?? request();

        $query->latest();

        if ($request->filled('search')) {
            $query->where('name', 'like', '%' . $request->search . '%')
                  ->orWhere('description', 'like', '%' . $request->search . '%')
                  ->orWhere('price', 'like', '%' . $request->search . '%');
        }

        if ($request->filled('store_type_id')) {
            $query->whereHas('store.storeType', function ($q) use ($request) {
                $q->where('id', $request->store_type_id);
            });
        }

        if ($request->filled('store_id')) {
            $query->where('store_id', $request->store_id);
        }

        if ($request->filled('category_id')) {
            $query->where('category_id', $request->category_id);
        }
        if ($request->filled('min_price')) {
            $query->where('price', '>=', $request->min_price);
        }
        if ($request->filled('max_price')) {
            $query->where('price', '<=', $request->max_price);
        }
        if ($request->filled('sort_by')) {
            switch ($request->sort_by) {
                case 'latest':
                    $query->latest();
                    break;
                case 'oldest':
                    $query->oldest();
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


    // public function checkProductInWishlists()
    // {
    //     $auth=Auth::guard('api')->user();
    //     $user=User::find($auth->id);
    //     if(!$user){
    //         return false;
    //     }
    //     $product= $this->wishlists()->where('user_id', $user->id)->exists();
    //     return $product;

    // }

    public function checkProductInWishlists(): bool
    {
        $userId = Auth::guard('api')->id();
        return $userId && $this->wishlists()->where('user_id', $userId)->exists();
    }


}
