<?php

namespace App\Models;

use App\Enums\StatusOrderEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusTrackingOrder extends Model
{
    protected $fillable = [
        'user_id',
        'order_id',
        'status',
        'user_type',
    ];

    protected $casts = [
        'status' => StatusOrderEnum::class,
    ];
}
