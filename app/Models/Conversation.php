<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conversation extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_one_id',
        'user_two_id',
        'last_message_at',
    ];

    public function userOne()
    {
        return $this->belongsTo(User::class, 'user_one_id');
    }

    public function userTwo()
    {
        return $this->belongsTo(User::class, 'user_two_id');
    }

    public function scopeBetween($query, $userOneId, $userTwoId)
    {
        return $query->where(function ($q) use ($userOneId, $userTwoId) {
            $q->where('user_one_id', $userOneId)
                ->where('user_two_id', $userTwoId);
        })->orWhere(function ($q) use ($userOneId, $userTwoId) {
            $q->where('user_one_id', $userTwoId)
                ->where('user_two_id', $userOneId);
        });
    }

    public function messages()
    {
        return $this->hasMany(Message::class);
    }

    public function isOnline()
    {
        $otherUser = auth()->id() == $this->user_one_id ? $this->userTwo : $this->userOne;

        if (!$otherUser->last_seen_at) {
            return false;
        }

        return $otherUser->last_seen_at->gt(now()->subMinutes(5));
    }

    public function getAvatar()
    {
        $otherUser = auth()->id() == $this->user_one_id ? $this->userTwo : $this->userOne;
        return $otherUser->image ?? 'uploads/defaults/default-avatar.png';
    }

    public function getName()
    {
        $otherUser = auth()->id() == $this->user_one_id ? $this->userTwo : $this->userOne;
        return $otherUser->name;
    }

    public function getLastMessageTime()
    {
        $lastMessage = $this->last_message_at;
        return $lastMessage ? $lastMessage->created_at->diffForHumans() : '';
    }

    public function getId()
    {
        if (auth()->id() == $this->user_one_id) {
            return $this->user_two_id;
        }elseif (auth()->id() == $this->user_two_id) {
            return $this->user_one_id;
        }
    }


}
