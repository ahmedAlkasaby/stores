<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Size extends MainModel
{   
    use SoftDeletes;
    protected $fillable = [
        'name',
        'description',
        'active',
        'order_id'
    ];
     public function scopeFilter($query, $request=null,$type_app='app')
    {

        $request=$request??request();
        if ($request->has('search')) {
            $query->where(function($q) use($request){
                $q->where('name','like','%'.$request->search.'%')
                   ->orWhere('description','like','%'.$request->search.'%');
            });
        }
        if($request->has("deleted") ){
            $query->onlyTrashed();
        }
        return $query;

    }

}
