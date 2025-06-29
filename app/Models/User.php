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
        'notify',
        "image"
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

    public function getNameAttribute()
    {
        return $this->first_name . ' ' . $this->last_name;
    }

    public function devices()
    {
        return $this->hasMany(Device::class, 'user_id', 'id');
    }

    public function scopeFilter($query ,$request=null){
        $request=$request??request();

        if($request->has('type')){
            $query->where('type',$request->type);
        }
        if($request->has('search')){
            $query->where(function($q) use($request){
                $q->where('first_name','like','%'.$request->search.'%')
                  ->orWhere('last_name','like','%'.$request->search.'%')
                  ->orWhere('email','like','%'.$request->search.'%')
                  ->orWhere('phone','like','%'.$request->search.'%');
            });
        }
        if($request->has('active')){
            $query->where('active',$request->active);
        }
        if($request->has('vip')){
            $query->where('vip',$request->vip);
        }
        if($request->has('lang')){
            $query->where('lang',$request->lang);
        }
        if($request->has('theme')){
            $query->where('theme',$request->theme);
        }
        if($request->has('notify')){
            $query->where('notify',$request->notify);
        }
        return $query;
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

    public function addresses()
    {
        return $this->hasMany(Address::class, 'user_id', 'id');
    }

    public function notifications()
    {
        return $this->hasMany(Notification::class, 'user_id', 'id');
    }
    
    public function notificationsUnread()
    {
        return $this->hasMany(Notification::class, 'user_id', 'id')->whereNull('read_at');
    }
    public function notificationsRead()
    {
        return $this->hasMany(Notification::class, 'user_id', 'id')->whereNotNull('read_at');
    }
    public function markAllNotificationsAsRead()
    {
        $this->notificationsUnread()->update(['read_at' => now()]);
    }




}
