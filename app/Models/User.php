<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use Laravel\Sanctum\HasApiTokens;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Laratrust\Contracts\LaratrustUser;
use Laratrust\Traits\HasRolesAndPermissions;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements JWTSubject,LaratrustUser
{
    use HasApiTokens, HasFactory, Notifiable , HasRolesAndPermissions;


    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = Hash::make($value);
    }
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password',
        'lang',
        'theme',
        'active',
        'phone',
        'vip',
        'notify'
    ];


    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];


    public function getJWTIdentifier()
    {
      return $this->getKey();
    }

    public function getJWTCustomClaims()
    {
      return [
        'email'=>$this->email,
        'name'=>$this->name
      ];
    }

    public function wishlists()
    {
        return $this->belongsToMany(Product::class,'wishlists','user_id','product_id')->withTimestamps();
    }

    public function cartItems()
    {
        return $this->hasMany(CartItem::class, 'user_id','id');
    }

    public function orders()
    {
        return $this->hasMany(Order::class, 'user_id','id');
    }
}
