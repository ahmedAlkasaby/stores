<?php

namespace App\Models;


class Category extends MainModel
{
    protected $fillable = [
        'name',
        'description',
        'image',
        'parent_id',
        'service_id',
        'active',
        'order_id'
    ];


    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id', 'id');
    }
    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id', 'id');
    }
    public function service()
    {
        return $this->belongsTo(Service::class);
    }
    public function products()
    {
        return $this->belongsToMany(Product::class);
    }

    public function scopeActiveParents($query){
        return $query->where('active', 1)
                     ->whereNull('parent_id')
                     ->whereHas('children')
                     ->orderBy('order_id', 'asc');
    }


    public function scopeActive($query)
    {
        return $query->where('active', 1)
                     ->whereDoesntHave('children')
                     ->orderBy('order_id', 'asc');
    }



    public function scopeFilter($query, $request = null, $type_app = 'app')
    {

        $request = $request ?? request();

       $query->orderBy('order_id','asc');

        if($request->has('active') && $request->active !=='all'){
            $query->where('active', $type_app=='app' ? 1 : $request->active);
        }

        if ($request->has('parent_id') && $request->parent_id != 'all'){
            $query->where('parent_id', $request->parent_id);
        }

        if ($request->has('search')) {
            $query->where(function ($q) use ($request) {
                $q->where('name', 'like', '%' . $request->search . '%')
                   ->orWhere('description', 'like', '%' . $request->search . '%');
            });
        }

        if ($request->has('service_id')&& $request->service_id != "all") {
            $query->where('service_id', $request->service_id);
        }

        if ($request->has('is_parents')==1) {
            $query->whereNull('parent_id');
        }

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


