<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\StoreCartItemsRequest;
use App\Http\Resources\Api\CartItemCollection;
use App\Http\Resources\Api\CartItemResource;
use App\Models\CartItem;
use App\Models\Product;
use App\Models\User;

class CartItemController extends MainController
{

    public function index()
    {
        $auth=Auth()->guard('api')->user();
        $cartItems = CartItem::with('product')->where('user_id', $auth->id)->paginate($this->perPage);
        return $this->sendData(new CartItemCollection($cartItems), __('site.cart_items'));
    }


    public function store(StoreCartItemsRequest $request)
    {
        // check qty is smaller than product stock
        $product = Product::find($request->product_id);
        if ($product->qty < $request->qty) {
            return $this->messageError(__('validation.qty_greater_than_stock'));
        }

        // check if product is already in cart
        $auth=Auth()->guard('api')->user();
        $user=User::find($auth->id);
        $cartItem=CartItem::where('product_id', $request->product_id)
        ->where('user_id', $user->id)
        ->first();
        if($cartItem){
           $cartItem->update([
                'qty' => $request->qty,
            ]);
            return $this->messageSuccess(__('site.cart_item_updated'));
        }

        $user->cartItems()->create($request->validated());

        return $this->messageSuccess(__('site.cart_item_added'));

    }


    public function show(string $id)
    {
        $cartItem = CartItem::with('product')->find($id);
        if (!$cartItem) {
            return $this->messageError(__('site.cart_item_not_found'));
        }
        return $this->sendData(new CartItemResource($cartItem), __('site.cart_item'));
    }



    public function destroy(string $id)
    {
        $cartItem = CartItem::find($id);
        if (!$cartItem) {
            return $this->messageError(__('site.cart_item_not_found'));
        }
        $cartItem->delete();
        return $this->messageSuccess(__('site.cart_item_deleted'));
    }
}
