<?php

namespace App\Models;



class Payment extends MainModel
{

    protected $fillable = [
        'name',
        'description',
        'active',
        'image',
        'order_id'
    ];


     public function scopeActive($query)
    {
        return $query->where('active', 1)
                     ->orderBy('order_id', 'asc');
    }

    public function orders()
    {
        return $this->hasMany(Order::class, 'payment_id', 'id');
    }
}
