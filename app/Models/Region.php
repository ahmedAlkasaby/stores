<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends MainModel
{
    use HasFactory;

    protected $fillable = [
        'name',
        'city_id',
        'active',
        'order_id',
        'shipping',
    ];

    public function city()
    {
        return $this->belongsTo(City::class);
    }

        public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
