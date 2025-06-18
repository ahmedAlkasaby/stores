<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unit extends MainModel
{
    protected $fillable = [
        'name',
        'description',
        'active',
        'order_id'
    ];
}
