<?php

namespace App\Models;



class Slider extends MainModel
{
    protected $fillable = [
        'name',
        'description',
        'active',
        'feature',
        'order_id',
        'product_id',
        'image',
    ];


    public function scopeFilter($query, $request=null, $type_app='app')
    {
        $request = $request ?? request();

        $query->orderBy('order_id','asc');

        $query->where('active', $type_app=='app' ? 1 : $request->active);


    }

}
