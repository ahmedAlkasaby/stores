<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends MainModel
{
    protected $fillable = [
        'site_title',
        'site_phone',
        'site_email',
        'min_order',
        'max_order',
        'min_order_for_shipping_free',
        'delivery_cost',
        'site_open',
        'active',
        'logo',
        'facebbook',
        'youtube',
        'whatsapp',
        'snapchat',
        'instagram',
        'twitter',
        'tiktok'
    ];

}
