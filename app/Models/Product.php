<?php

namespace App\Models;



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

    public function scopeFilter($query, $request = null)
    {
        $request = $request ?? request();

        if ($request->filled('search')) {
            $query->where('name->ar', 'like', '%' . $request->search . '%')
                  ->orWhere('name->en', 'like', '%' . $request->search . '%');
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

        return $query;
    }


}
