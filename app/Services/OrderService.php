<?php

namespace App\Services;

use App\Models\Product;
use App\Models\Setting;
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

    public function createOrderItems($items,$order){
        foreach ($items as $item) {
           $order->orderItems()->create([
               'product_id'=>$item->product_id,
               'amount'=>$item->amount,
               'price'=>$item->product->price,
               'discount'=>$this->getDiscount($item->product_id),
               'shipping_cost' => $item->product->shipping_cost ?? 0,
           ]);
       }
    }


    public function canCreateOrder()
    {
        $auth=Auth()->guard('api')->user();
        $user=User::find($auth->id);
        $totalPrice=$user->totalPriceInCart();
        $setting=Setting::where('active',1)->first();


        if ($user->cartItems()->count() == 0) {
            return __('api.cart_is_empty');
        }
        if ($user->addresses()->count() == 0) {
            return __('api.address_not_found');
        }

         if($totalPrice < $setting->min_order){
            return __('api.min_order',['min_order' => $setting->min_order]);
        }

        return true;
    }

}

