<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WishListController extends MainController
{

    public function index(Request $request)
    {
        $auth=Auth::guard('api')->user();
        $user=User::find($auth->id);
        $wishlists=$user->wishlists()->with(['store','category'])->filter($request)->paginate(10);
        return response()->json([
            'status' => true,
            'message' => 'Wishlists retrieved successfully',
            'data' => $wishlists,
        ]);
    }

    public function toggle(Request $request)
    {
        $auth=Auth::guard('api')->user();
        $user=User::find($auth->id);
        $product=$user->wishlists()->where('product_id',$request->product_id)->first();
        if($product){
            $user->wishlists()->detach($request->product_id);
            return response()->json([
                'status' => true,
                'message' => 'Product removed from wishlist',
            ]);
        }else{
            $user->wishlists()->attach($request->product_id);
            return response()->json([
                'status' => true,
                'message' => 'Product added to wishlist',
            ]);
        }
    }

    public function store(Request $request)
    {
        $auth=Auth::guard('api')->user();
        $user=User::find($auth->id);
        $user->wishlists()->attach($request->product_id);
        return response()->json([
            'status' => true,
            'message' => 'Product added to wishlist',
        ]);
    }

    public function destroy(Request $request)
    {
        $auth=Auth::guard('api')->user();
        $user=User::find($auth->id);
        $user->wishlists()->detach($request->product_id);
        return response()->json([
            'status' => true,
            'message' => 'Product removed from wishlist',
        ]);
    }







}
