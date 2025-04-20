<?php

namespace App\Models;



class StatusOrder extends MainModel
{
    protected $fillable = [
        'name',
        'description',
    ];

    public function orders()
    {
        return $this->hasMany(Order::class, 'status_order_id', 'id');
    }
}
