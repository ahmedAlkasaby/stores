<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Page extends MainModel
{

    protected $fillable = [
        'name',
        'description',
        'image',
        'type',
        'active',
        'order_id',
    ];



}
