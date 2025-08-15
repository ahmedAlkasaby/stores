<?php

namespace App\Models;

use Carbon\Carbon;
use Jenssegers\Agent\Agent;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    protected $fillable =[
        'id',
        'user_id',
        'ip_address',
        'user_agent',
        'payload',
        'last_activity',
    ];

    public $incrementing = false;

    protected $hidden = [
        'payload'
    ];
    protected $appends = [
        'is_this_device',
    ];

    public function getUserAgentAttribute(): array
    {
        $agent = new Agent();
        $agent->setUserAgent($this->attributes['user_agent'] ?? '');
    
        return [
            'browser'    => $agent->browser(),
            'platform'   => $agent->platform(),
            'is_desktop' => $agent->isDesktop(),
        ];
    }

    public function getIsThisDeviceAttribute(): bool
    {
        return $this->id === session()->getId();
    }


    public function getLastActivityAttribute($value): ?string
    {
        return $value
            ? Carbon::createFromTimestamp($value)->diffForHumans()
            : null;
    }

}
