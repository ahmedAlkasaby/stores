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
        "image",
        'date_of_birth',
        'type',
        'gender',
    ];


    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    protected $seachable = [
        'first_name',
        'last_name',
        'email',
        'phone',
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
    public function sessions()
    {
        return $this->hasMany(Session::class, 'user_id', 'id');
    }

    public function scopeFilter($query ,$request=null){
        $request=$request??request();

        if($request->has('type')){
            $query->where('type',$request->type);
        }
        if ($request->filled('search')) {
            $query->mainSearch($request->input('search'));
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


    public function markNotificationAsRead($notifications)
    {
        foreach ($notifications as $notification){
            $notification->update(['read_at' => now()]);
        }
    }

    public function totalPriceInCart(){
        if($this->cartItems->count()==0){
            return 0;
        }
        $price=0;
        $cartItems=$this->cartItems;
        foreach ($cartItems as $item) {
            $product=Product::find($item->product_id);
            $price += $product->price * $item->amount;
        }
        return $price;

    }




}
