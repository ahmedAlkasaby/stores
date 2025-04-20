<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends MainModel
{
    protected static function booted()
    {
        static::deleting(function ($order) {
            $order->location()->delete();
        });
    }

    protected $fillable = [
        'user_id',
        'status_order_id',
        'store_id',
        'product_id',
        'payment_id',
        'price',
        'shipping_cost',
        'notes',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function statusOrder()
    {
        return $this->belongsTo(StatusOrder::class, 'status_order_id', 'id');
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

    public function location()
    {
        return $this->morphOne(location::class, 'locationable');
    }

}
