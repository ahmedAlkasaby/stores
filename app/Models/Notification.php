<?php

namespace App\Models;



class Notification extends MainModel
{
    protected $fillable = [
        'user_id',
        'name',
        'description',
        'read_at',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function markAsRead()
    {
        $this->read_at = now();
        $this->save();
    }

    
}
