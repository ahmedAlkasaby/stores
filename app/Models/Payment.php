<?php

namespace App\Models;



class Payment extends MainModel
{

    protected $fillable = [
        'name',
        'description',
        'image',
        'active',
        'order_id',
        'type',
    ];

    public function orders()
    {
        return $this->hasMany(Order::class, 'payment_id', 'id');
    }
}
