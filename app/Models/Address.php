<?php

namespace App\Models;

use App\Enums\TypeAddressEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'type',
        'city_id',
        'region_id',
        'active',
        'latitude',
        'longitude',
        'address',
        'building',
        'floor',
        'apartment',
        'additional_info'
    ];

    protected $casts=[
        'type'=>TypeAddressEnum::class,
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function region()
    {
        return $this->belongsTo(Region::class);
    }
}
