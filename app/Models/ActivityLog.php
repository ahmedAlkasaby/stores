<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ActivityLog extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable=[
        'user_id',
        'model_type',
        'model_id',
        'action',
        'changes',
        'ip_address',
        'user_agent',
    ];


    protected $casts = [
        'changes' => 'array',
    ];

    public function user()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function model()
    {
        return $this->morphTo();
    }


    public function scopeFilter($query, $request = null){
        $request=$request??request();
        $query->orderBy('created_at','desc');

        if($request->has('user_id') && $request->user_id != 'all'){
            $query->where('user_id',$request->user_id);
        }

        if($request->has('model_type') && $request->model_type != 'all'){
            $query->where('model_type',$request->model_type);
        }

        if($request->has('action') && $request->action != 'all'){
            $query->where('action',$request->action);
        }
        return $query;

    }
}
