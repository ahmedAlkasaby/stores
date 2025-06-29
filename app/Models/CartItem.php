<?php

namespace App\Models;



class CartItem extends MainModel
{
    protected $fillable = [
        'product_id',
        'user_id',
        'amount',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
