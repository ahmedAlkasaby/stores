<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Addition extends MainModel
{

    protected $fillable = [
        'name',
        'image',
        'type',
        'price',
        'order_id',
        'description',
        'active',
    ];

    protected $searchable = [
        'name',
        'description',
        'price'
    ];
    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
    public function scopeFilter($query, $request = null, $type_app = 'app')
    {

        $request = $request ?? request();
        $filters = $request->only(['active', 'type', 'price']);

        $query->mainSearch($request->input('search'));
        $query->mainApplyDynamicFilters($filters);


        if ($request->has('deleted') && $request->deleted == 1) {
            $query->onlyTrashed();
        }

        return $query;
    }
}
