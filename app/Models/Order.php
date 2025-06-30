<?php

namespace App\Models;

use App\Enums\StatusOrderEnum;



class Order extends MainModel
{

    protected $fillable = [
        'user_id',
        'status',
        'payment_id',
        'shipping',
        'notes',
    ];

    protected $casts=[
        'status'=>StatusOrderEnum::class,
    ];



    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function store()
    {
        return $this->belongsTo(Store::class, 'store_id', 'id');
    }
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }

    public function payment()
    {
        return $this->belongsTo(Payment::class, 'payment_id', 'id');
    }

    public function orderItems()
    {
        return $this->hasMany(OrderItem::class, 'order_id', 'id');
    }



    public function region()
    {
        return $this->belongsTo(Region::class, 'region_id', 'id');
    }

}
