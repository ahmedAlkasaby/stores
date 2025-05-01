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
        'active',
        'order_id',
    ];

    public function storeType()
    {
        return $this->belongsTo(StoreType::class, 'store_type_id', 'id');
    }

    public function categories()
    {
        return $this->hasMany(Category::class, 'store_id', 'id');
    }
    public function products()
    {
        return $this->hasMany(Product::class, 'store_id', 'id');
    }


    public function scopeFilter($query, $request=null,$type_app='app')
    {

        $request=$request??request();

        $query->orderBy('order_id','asc');

        $query->where('active', $type_app=='app' ? 1 : $request->active);



        if ($request->has('search')) {
            $query->where(function($q) use($request){
                $q->where('name','like','%'.$request->search.'%')
                   ->orWhere('description','like','%'.$request->search.'%')
                   ->orWhere('address','like','%'.$request->search.'%');
            });
        }
        if ($request->has('store_type_id')) {
            $query->where('store_type_id', $request->store_type_id);
        }

        if ($request->filled('sort_by')) {
            switch ($request->sort_by) {
                case 'latest':
                    $query->orderByDesc('order_id');
                    break;
                case 'oldest':
                    $query->orderBy('order_id', 'asc');
                    break;
            }
        }


       return $query;
    }




}

