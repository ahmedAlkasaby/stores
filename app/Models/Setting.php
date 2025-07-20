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
        'result',
        'min_order_for_shipping_free',
        'delivery_cost',
        'max_hour_product_in_carts',
        'min_amount_product_notify',
        'site_open',
        'active',
        'logo',
        'facebook',
        'youtube',
        'whatsapp',
        'snapchat',
        'instagram',
        'twitter',
        'tiktok',
        "telegram"
    ];

}
