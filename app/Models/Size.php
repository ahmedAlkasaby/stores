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
        if ($request->filled('search')) {
    $query->mainSearch($request->input('search'));
}
        if(request()->has('active') && request()->active != 'all'){
            $query->where('active',request()->active);
        }
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
