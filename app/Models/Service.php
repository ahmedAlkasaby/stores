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
        return $this->hasMany(Category::class);
    }
    public function products()
    {
        return $this->hasMany(Product::class);
    }


    public function scopeActive($query)
    {
        $query->orderBy('order_id','asc');

        $query->where('active', 1);

        return $query;

    }


    public function scopeFilter($query, $request=null,$type_app='app')
    {

        $request=$request??request();

        $query->orderBy('order_id','asc');

        $filters = $request->only(['active', 'type']);

        
        
        
        $query->mainSearch($request->input('search'));
        
        $query->mainApplyDynamicFilters($filters);



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

