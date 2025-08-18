<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrashBucket extends Model
{
    protected $fillable = [
        'user_id',
        'model_type',
        'model_id',
    ];

   

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function model()
    {
        return $this->morphTo()->withTrashed();
    }

     public function scopeFilter($query, $request = null)
    {
        $request = $request ?? request();
        $query->orderBy('created_at', 'desc');

        if ($request->has('user_id') && $request->user_id != 'all') {
            $query->where('user_id', $request->user_id);
        }

        if ($request->has('model_type') && $request->model_type != 'all') {
            $query->where('model_type', $request->model_type);
        }

       
        return $query;
    }
}
