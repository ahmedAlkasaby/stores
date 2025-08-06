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

        $filters = $request->only(['active', 'type']);

        $query->mainApplyDynamicFilters($filters);

        $query->mainSearch($request->input('search'));

    }



}
