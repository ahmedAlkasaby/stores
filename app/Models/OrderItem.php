<?php

namespace App\Models;



class OrderItem extends MainModel
{
    protected $fillable = [
        'order_id',
        'product_id',
        'amount',
        'price',
        'discount',
        'shipping_cost'
    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

}
