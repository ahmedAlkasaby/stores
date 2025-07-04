<?php

namespace App\Models;


class City extends MainModel
{

    protected $fillable = [
        'name',
        "order_id",
        "shipping",
        "active",
    ];

     public function scopeFilter($query, $request=null,$type_app='app')
    {

        $request=$request??request();

        $query->orderBy('order_id','asc');

        if($request->has('active') && $request->active !=='all'){
            $query->where('active', $type_app=='app' ? 1 : $request->active);
        }

        if ($request->has('search')) {
            $query->where(function($q) use($request){
                $q->where('name','like','%'.$request->search.'%');
            });
        }





       return $query;
    }

    public function regions()
    {
        return $this->hasMany(Region::class);
    }



}
