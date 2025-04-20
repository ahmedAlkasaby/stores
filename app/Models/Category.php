<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends MainModel
{
    protected $fillable = [
        'name',
        'description',
        'image',
        'parent_id',
        'store_id',
    ];


    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id', 'id');
    }
    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id', 'id');
    }
    public function store()
    {
        return $this->belongsTo(Store::class, 'store_id', 'id');
    }
}


