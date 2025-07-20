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

    public static function send($users,$nameAr,$nameEn,$descriptionAr,$descriptionEn)
    {
        foreach ($users as $user) {
            Notification::create([
                'user_id' => $user->id,
                'name' =>[
                    'en' => $nameEn,
                    'ar' => $nameAr,
                ] ,
                'description' => [
                    'en' => $descriptionEn,
                    'ar' => $descriptionAr,
                ],
            ]);
        }
    }


    public function scopeFilter($query, $request = null)
    {
        $request = $request ?? request();

        $query->orderBy('created_at', 'desc');

        if ($request->filled('user_id') && $request->user_id != 'all') {
            $query->where('user_id', $request->user_id);
        }

        if ($request->filled('date_start')) {
            $query->whereDate('created_at', '>=', $request->date_start);
        }

        if ($request->filled('date_end')) {
            $query->whereDate('created_at', '<=', $request->date_end);
        }

        return $query;
    }



}
