<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Page extends MainModel
{

    protected $fillable = [
        'name',
        'description',
        'image',
        'type',
        'active',
        'order_id',
    ];


    public function scopeFilter($query, $request = null, $type_app = 'app')
    {
       $request=$request??request();

        $query->orderBy('order_id','asc');

        if($request->has('active') && $request->active !=='all'){
            $query->where('active', $type_app=='app' ? 1 : $request->active);
        }

       if ($request->filled('search')) {
    $query->mainSearch($request->input('search'));
}

        if($request->has('type')){
            $query->where('type', $request->type);
        }

    }



}
