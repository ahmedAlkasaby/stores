<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends MainModel
{
    protected $fillable = [
        'name',
        'description',
        'address',
        'image',
        'store_type_id',
    ];

    public function storeType()
    {
        return $this->belongsTo(StoreType::class, 'store_type_id', 'id');
    }

    public function categories()
    {
        return $this->hasMany(Category::class, 'store_id', 'id');
    }


}

