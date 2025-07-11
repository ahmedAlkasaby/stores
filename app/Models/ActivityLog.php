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
}
