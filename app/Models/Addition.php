<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Addition extends MainModel
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'image',
        'type',
        'price',
        'order_id',
        'description',
        'active',
    ];
    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
    public function scopeFilter($query, $request = null, $type_app = 'app')
    {

        $request = $request ?? request();

        if ($request->filled('search')) {
            $query->where(function ($q) use ($request) {
                $q->where('name', 'like', '%' . $request->search . '%')
                    ->orWhere('description', 'like', '%' . $request->search . '%');
            });
        }

        if ($request->filled('active') && $request->active != 'all') {
            $query->where('active', $request->active);
        }

        if ($request->filled('name')) {
            $query->where('name', 'like', '%' . $request->name . '%');
        }
        if ($request->filled('type') && $request->type != 'all') {
            $query->where('type', $request->type);
        }

        if ($request->filled('price')&& $request->type != 'free') {
            $query->where('price', $request->price);
        }


        if ($request->has('deleted')&& $request->deleted == 1) {
            $query->onlyTrashed();
        }

        return $query;
    }
}
