<?php

namespace App\Models;



class Unit extends MainModel
{

    protected $fillable = [
        'name',
        'description',
        'active',
        'order_id',

    ];


    public function products()
    {
        return $this->hasMany(Product::class, 'unit_id', 'id');
    }
    public function scopeFilter($query, $request=null,$type_app='app')
    {

        $request=$request??request();
        $query->orderBy('order_id','asc');
        $query->where('active', $type_app=='app' ? 1 : $request->active);
        if ($request->has('search')) {
            $query->where(function($q) use($request){
                $q->where('name','like','%'.$request->search.'%')
                   ->orWhere('description','like','%'.$request->search.'%');
            });
        }
        return $query;
    }






}
