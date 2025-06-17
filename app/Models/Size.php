<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Size extends MainModel
{
    protected $fillable = [
        'name',
        'description',
        'image',
        'active',
        'order_id',
    ];

    public function products()
    {
        return $this->hasMany(Product::class, 'size_id', 'id');
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
