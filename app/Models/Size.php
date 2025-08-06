<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Size extends MainModel
{
    protected $fillable = [
        'name',
        'description',
        'active',
        'order_id'
    ];

    public function products(){
        return $this->hasMany(Product::class);
    }


    public function scopeFilter($query, $request=null,$type_app='app')
    {

        $request=$request??request();
        $filters = $request->only(['active']);

        $query->mainSearch($request->input('search'));

        $query->mainApplyDynamicFilters($filters);
        if($request->has("deleted") ){
            $query->onlyTrashed();
        }
        return $query;

    }

    public function scopeActive($query)
    {
        return $query->where('active', 1)
            ->orderBy('order_id', 'asc');
    }

}
