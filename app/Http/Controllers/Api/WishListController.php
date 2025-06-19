<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\ProductRequest;
use App\Http\Requests\Api\StoreWishlistRequest;
use App\Http\Requests\Api\ToggleWishlistRequest;
use App\Http\Resources\Api\ProductCollection;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WishListController extends MainController
{

    public function index(ProductRequest $request)
    {
        $auth=Auth::guard('api')->user();
        $user=User::find($auth->id);
        $wishlists=$user->wishlists()->filter($request)->paginate($this->perPage);

        return $this->sendData(new ProductCollection($wishlists), __('site.wishlists'));
    }

    public function toggle(ToggleWishlistRequest $request)
    {
        $auth=Auth::guard('api')->user();
        $user=User::find($auth->id);
        $product=$user->wishlists()->where('product_id',$request->product_id)->first();
        if($product){
            $user->wishlists()->detach($request->product_id);
            return $this->messageSuccess(__('site.wishlist_removed'));
        }else{
            $user->wishlists()->attach($request->product_id);
            return $this->messageSuccess(__('site.wishlist_added'));

        }
    }

    // public function store(StoreWishlistRequest $request)
    // {
    //     $auth=Auth::guard('api')->user();
    //     $user=User::find($auth->id);
    //     $user->wishlists()->attach($request->product_id);
    //     return response()->json([
    //         'status' => true,
    //         'message' => 'Product added to wishlist',
    //     ]);
    // }

    // public function destroy(Request $request)
    // {
    //     $auth=Auth::guard('api')->user();
    //     $user=User::find($auth->id);
    //     $user->wishlists()->detach($request->product_id);
    //     return response()->json([
    //         'status' => true,
    //         'message' => 'Product removed from wishlist',
    //     ]);
    // }

}
