<?php

namespace App\Models;

use App\Enums\StatusOrderEnum;
use Illuminate\Support\Facades\Auth;



class Order extends MainModel
{

    protected $fillable = [
        'user_id',
        'address_id',
        'status',
        'payment_id',
        'delivery_time_id',
        'delivery_id',
        'shipping_address',
        'notes',
    ];

    protected $casts=[
        'status'=>StatusOrderEnum::class,
    ];



    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function address()
    {
        return $this->belongsTo(Address::class, 'address_id', 'id');
    }

    public function delivery()
    {
        return $this->belongsTo(User::class,'delivery_id','id');
    }

    public function deliveryTime()
    {
        return $this->belongsTo(DeliveryTime::class, 'delivery_time_id', 'id');
    }



    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }

    public function payment()
    {
        return $this->belongsTo(Payment::class, 'payment_id', 'id');
    }

    public function orderItems()
    {
        return $this->hasMany(OrderItem::class, 'order_id', 'id');
    }

    public function region()
    {
        return $this->belongsTo(Region::class, 'region_id', 'id');
    }

    public function orderPrice(){
        $price=0;
        $orderItems=$this->orderItems;
        foreach ($orderItems as $item) {
            $price += $item->price * $item->amount;
        }
        return $price;
    }

    public function orderDiscount(){
        $discount=0;
        $orderItems=$this->orderItems;
        foreach ($orderItems as $item) {
            $discount += $item->discount * $item->amount;
        }
        return $discount;
    }
    public function orderShippingProducts(){
        $shipping=0;
        $orderItems=$this->orderItems;
        foreach ($orderItems as $item) {
            $shipping += $item->shipping_cost * $item->amount;
        }
        return $shipping;
    }

    public function getShippingAddress()
    {
        $auth=Auth::guard('api')->user();
        $user=User::find($auth->id);
        $address=$user->addresses()->where('active',1)->first();
        $shipping=$address->city->shipping;
        if ($address->region_id){
            $shipping += $address->region->shipping;
        }
        return $shipping;
    }



}
