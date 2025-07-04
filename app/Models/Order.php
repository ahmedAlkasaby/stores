<?php

namespace App\Models;

use App\Enums\StatusOrderEnum;



class Order extends MainModel
{

    protected $fillable = [
        'user_id',
        'status',
        'payment_id',
        'delivery_time_id',
        'delivery_id',
        'shipping_address',
        'notes',
    ];

    protected $casts=[
        'status'=>StatusOrderEnum::class,
    ];



    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function delivery()
    {
        return $this->belongsTo(User::class,'delivery_id','id');
    }

    public function deliveryTime()
    {
        return $this->belongsTo(DeliveryTime::class, 'delivery_time_id', 'id');
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
