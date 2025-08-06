<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unit extends MainModel
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
    public function scopeFilter($query, $request = null, $type_app = 'app')
    {

        $request = $request ?? request();

        if ($request->filled('search')) {
           $query->mainSearch($request->input('search'));
       }

        if ($request->filled('active') && $request->active != 'all') {
            $query->where('active', $request->active);
        }

        if ($request->filled('name')) {
            $query->where('name', 'like', '%' . $request->name . '%');
        }

        if ($request->filled('order_id')) {
            $query->where('order_id', $request->order_id);
        }

        if ($request->has('deleted') && $request->deleted == 1) {
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
