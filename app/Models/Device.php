<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Device extends MainModel
{
    protected $fillable = [
        'user_id',
        'token',
        'device_type',
        'imei',
    ];

    public function user()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }


}
