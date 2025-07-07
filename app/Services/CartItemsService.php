<?php

namespace App\Services;

use App\Models\Product;
use App\Models\Setting;
use App\Models\User;

class CartItemsService{
    public function canPlaceProductInCart($productId,$amount,$userId)
    {
        $product = Product::find($productId);
        $setting=Setting::where('active',1)->first();


        if ($product->children()->exists()){
            return __('api.you_must_choose_from_children');
        }
        if(! $product->active){
            return __('api.product_not_active');
        }

        if($amount > $product->max_order){
            return __('api.max_order',['max_order' => $product->max_order]);
        }

        if ($amount > $product->availableAmount()){
            return __('api.product_not_available_amount');
        }
        if(! $this->checkMaxOrderInSetting($userId,$amount,$productId)){
            return __('api.max_order_in_setting',['max_order' => $setting->max_order]);
        }

        return true;

    }


    public function checkMaxOrderInSetting($userId,$amount,$productId)
    {
        $setting=Setting::where('active',1)->first();

        $user = User::with('cartItems.product')->find($userId);
        $product=Product::find($productId);
        $totalPriceForThisProduct=$product->price*$amount;

        if($totalPriceForThisProduct > $setting->max_order){
            return false;
        }

        if ($user->cartItems->count()>0){
            $price=$totalPriceForThisProduct;

            foreach ($user->cartItems as $item) {
                $price += $item->product->price*$item->amount;
            }
            if($price > $setting->max_order){
                return false;
            }
        }
        return true;
    }

    public function checkProductInCart($productId,$userId)
    {
        $user = User::with('cartItems.product')->find($userId);
        $product=Product::find($productId);
        $cartItem=$user->cartItems()->where('product_id', $product->id)->first();
        if($cartItem){
            return true;
        }
        return false;
    }

}
