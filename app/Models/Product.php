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
}
