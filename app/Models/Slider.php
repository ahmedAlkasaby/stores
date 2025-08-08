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
        "type",
    ];

    public function product(){
        return $this->belongsTo(Product::class);
    }
    public function scopeFilter($query, $request=null, $type_app='app')
    {
        $request = $request ?? request();

        $query->orderBy('order_id','asc');

        $query->mainSearch($request->input('search'));
        $query->mainApplyDynamicFilters([
            'active'=>$type_app=='app' ? 1 : $request->active,
            'feature'=>$request->input('feature'),
            'type'=> $request->input('type'),
        ]);



    }

}
