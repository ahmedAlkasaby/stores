<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class location extends MainModel
{
    protected $fillable = [
        'address',
        'latitude',
        'longitude',
        'locationable_id',
        'locationable_type',
    ];

    public function locationable()
    {
        return $this->morphTo();
    }
}
