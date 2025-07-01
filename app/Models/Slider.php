<?php

namespace App\Models;



class Slider extends MainModel
{
    protected $fillable = [
        'name',
        'description',
        'active',
        'feature',
        'order_id',
        'product_id',
        'image',
    ];

}
