<?php

namespace App\Models;

use App\Enums\StatusOrderEnum;



class Order extends MainModel
{

    protected $fillable = [
        'user_id',
        'status',
        'store_id',
        'product_id',
        'payment_id',
        'price',
        'shipping_cost',
        'notes',
    ];

    protected $casts=[
        'status'=>StatusOrderEnum::class,
    ];

     protected static $allowedTransitions = [
        'request' => ['pending', 'approved', 'preparing','preparingFins', 'rejected', 'canceled'],
        'pending' => ['approved', 'rejected', 'canceled'],
        'approved' => ['preparing', 'canceled'],
        'preparing' => ['preparing finished', 'canceled'],
        'preparing finished' => ['delivery go'],
        'delivery go' => ['delivered', 'canceled'],
        'delivered' => ['returned'],
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





}
