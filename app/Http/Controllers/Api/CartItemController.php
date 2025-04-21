<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\StoreCartItemsRequest;
use App\Models\CartItem;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class CartItemController extends MainController
{

    public function index()
    {
        //
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
        //
    }



    public function destroy(string $id)
    {
        //
    }
}
