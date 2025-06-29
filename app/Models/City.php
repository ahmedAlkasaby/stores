<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends MainModel
{
    use HasFactory;

    protected $fillable = [
        'name',
        "order_id",
        "shipping",
        "active",
    ];

    public function regions()
    {
        return $this->hasMany(Region::class);
    }
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
