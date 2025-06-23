<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Brand extends MainModel
{
    protected $fillable = [
        'name',
        'description',
        'active',
        'order_id',
        'image'
    ];
    use SoftDeletes;
    // public function getImageAttribute($value)
    // {
    //     return $value ? asset('storage/' . $value) : null;
    // }
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

        if ($request->filled('order_id')) {
            $query->where('order_id', $request->order_id);
        }

        if ($request->has('deleted')&& $request->deleted == 1) {
            $query->onlyTrashed();
        }

        return $query;
    }
}
