<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupon extends MainModel
{
    use HasFactory;
    protected $fillable=[
        'code',
        'type',
        'discount',
        'max_discount',
        'finish',
        'use_limit',
        'use_count',
        'min_order',
        'active',
        'order_id',
        "date_start",
        "date_end",
        "name",
        "description",

    ];
}
