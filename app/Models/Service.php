<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service  extends MainModel
{
    protected $fillable = [
        'name',
        'description',
        'image',
        'active',
        'order_id',
    ];



    public function categories()
    {
        return $this->hasMany(Category::class, 'service_id', 'id');
    }
    public function products()
    {
        return $this->hasMany(Product::class, 'service_id', 'id');
    }


    public function scopeFilter($query, $request=null,$type_app='app')
    {

        $request=$request??request();

        $query->orderBy('order_id','asc');

        if($request->has('active') && $request->active !=='all'){
            $query->where('active', $type_app=='app' ? 1 : $request->active);
        }



        if ($request->has('search')) {
            $query->where(function($q) use($request){
                $q->where('name','like','%'.$request->search.'%')
                   ->orWhere('description','like','%'.$request->search.'%');
            });
        }


        if ($request->filled('sort_by')) {
            switch ($request->sort_by) {
                case 'latest':
                    $query->orderByDesc('id');
                    break;
                case 'oldest':
                    $query->orderBy('id', 'asc');
                    break;
            }
        }

      
       return $query;
    }




}

