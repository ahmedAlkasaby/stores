<?php

namespace App\Models;


class Brand extends MainModel
{

    protected $fillable = [
        'name',
        'description',
        'active',
        'image',
    ];



    public function products()
    {
        return $this->hasMany(Product::class,'brand_id','id');
    }
}
