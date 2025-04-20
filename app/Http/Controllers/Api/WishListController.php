<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WishListController extends Controller
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


    public function store(Request $request)
    {

    }


    public function destroy(string $id)
    {

    }
}
