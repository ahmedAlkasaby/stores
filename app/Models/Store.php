<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Store extends MainModel
{
    use SoftDeletes;
    protected $fillable = [
        'name',
        'description',
        'address',
        'image',
        'store_type_id',
        'active',
        'order_id',
    ];

    public function storeType()
    {
        return $this->belongsTo(StoreType::class, 'store_type_id', 'id');
    }

    public function categories()
    {
        return $this->hasMany(Category::class, 'store_id', 'id');
    }
    public function products()
    {
        return $this->hasMany(Product::class, 'store_id', 'id');
    }


    public function scopeFilter($query, $request=null,$type_app='app')
    {

        $request=$request??request();

        $query->orderBy('order_id','asc');
        if($type_app=='app')
        $query->where('active', $type_app=='app' ? 1 : $request->active);

        

        if ($request->has('search')) {
            $query->where(function($q) use($request){
                $q->where('name','like','%'.$request->search.'%')
                   ->orWhere('description','like','%'.$request->search.'%')
                   ->orWhere('address','like','%'.$request->search.'%');
            });
        }
        if ($request->has('store_type_id')) {
            $query->where('store_type_id', $request->store_type_id);
        }

        if ($request->filled('sort_by')) {
            switch ($request->sort_by) {
                case 'latest':
                    $query->orderByDesc('order_id');
                    break;
                case 'oldest':
                    $query->orderBy('order_id', 'asc');
                    break;
            }
        }
        if ($request->filled('active') && $request->active != 'all' && $type_app != 'app') {
            $query->where('active', $request->active);
        }

        if ($request->filled('name')) {
            $query->where('name', 'like', '%' . $request->name . '%');
        }
        if ($request->filled('address')) {
            $query->where('address', 'like', '%' . $request->address . '%');
        }

        if ($request->filled('order_id')) {
            $query->where('order_id', $request->order_id);
        }

        if ($request->has('deleted') && $request->deleted == 1) {
            $query->onlyTrashed();
        }



       return $query;
    }




}

