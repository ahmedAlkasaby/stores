<?php

namespace App\Services;

use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class OrderService{

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

    public function getDiscount($productId)
    {
        $product=Product::find($productId);
        if (! $product->offer){
            return 0;
        }
        if ($product->offer_price){
            return $product->offer_price-$product->price;
        }elseif ($product->offer_amount) {
            $amount=$product->offer_amount;
            $price=$product->price;
            $totalPrice=(100*$price)/(100-$amount);
            return ($totalPrice-$price);
        }elseif ($product->offer_percent){
            return $product->offer_percent;
        }
    }

}

