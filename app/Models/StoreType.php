<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StoreType extends MainModel
{

    protected $fillable = [
        'name',
        'description',
        'image'
    ];

    public function stores()
    {
        return $this->hasMany(Store::class,'store_type_id','id');
    }
}
