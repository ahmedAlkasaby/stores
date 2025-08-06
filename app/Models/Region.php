<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends MainModel
{
    use HasFactory;

    protected $fillable = [
        'name',
        'city_id',
        'active',
        'order_id',
        'shipping',
    ];

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function scopeFilter($query, $request=null,$type_app='app')
    {

        $request=$request??request();

        $query->orderBy('order_id','asc');

        if($request->has('active') && $request->active !=='all'){
            $query->where('active', $type_app=='app' ? 1 : $request->active);
        }

       if ($request->filled('search')) {
    $query->mainSearch($request->input('search'));
}

        if($request->has('city_id')){
            $query->where('city_id',$request->city_id);
        }

       return $query;
    }




}
