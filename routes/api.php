<?php

use App\Http\Controllers\Api\Auth\AuthController;
use App\Http\Controllers\Api\Auth\ForgetPasswordController;
use App\Http\Controllers\Api\Auth\RestPasswordController;
use App\Http\Controllers\Api\CartItemController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\OrderController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\StoreController;
use App\Http\Controllers\Api\StoreTypeController;
use App\Http\Controllers\Api\WishListController;
use Illuminate\Support\Facades\Route;








Route::group(['middleware'=>'userLangApi'],function(){
    Route::apiResource('store_types',StoreTypeController::class)->only(['index','show']);
    Route::apiResource('stores',StoreController::class)->only(['index','show']);
    Route::apiResource('categories',CategoryController::class)->only(['index','show']);
    // Route::apiResource('products',ProductController::class)->only(['index','show']);
    Route::group(['prefix'=>'auth'],function(){
        Route::post('register/check',[AuthController::class, 'check_register']);
        Route::post('register',[AuthController::class,'register']);
        Route::post('login',[AuthController::class,'login']);
        Route::post('logout',[AuthController::class,'logout'])->middleware('auth-api');
        Route::post('forget/password',[ForgetPasswordController::class,'ForgetPassword']);
        Route::post('rest/password',[RestPasswordController::class,'RestPassword']);
    });
    Route::group(['middleware'=>['auth-api']],function(){
        Route::get('wishlists',[WishListController::class,'index']);
        Route::post('wishlists',[WishListController::class,'toggle']);
        Route::apiResource('cart_items',CartItemController::class)->only(['index','show','store','destroy']);
        Route::apiResource('orders',OrderController::class)->only(['index','show','store']);
    });

});




