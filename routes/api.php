<?php

use App\Http\Controllers\Api\AddressController;
use App\Http\Controllers\Api\Auth\AuthController;
use App\Http\Controllers\Api\Auth\ForgetPasswordController;
use App\Http\Controllers\Api\Auth\RestPasswordController;
use App\Http\Controllers\Api\CartItemController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\CityController;
use App\Http\Controllers\Api\HomeController;
use App\Http\Controllers\Api\OrderController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\RegionController;
use App\Http\Controllers\Api\ServiceController;
use App\Http\Controllers\Api\StoreController;
use App\Http\Controllers\Api\StoreTypeController;
use App\Http\Controllers\Api\WishListController;
use Illuminate\Support\Facades\Route;








/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


Route::group(['middleware'=>['userLangApi','checkSettingOpen']],function(){
    Route::get('home',[HomeController::class,'index']);
    Route::apiResource('services',ServiceController::class)->only(['index','show']);
    Route::apiResource('categories',CategoryController::class)->only(['index','show']);
    Route::apiResource('products',ProductController::class)->only(['index','show']);
    Route::apiResource('cities',CityController::class)->only(['index','show']);
    Route::apiResource('regions',RegionController::class)->only(['index','show']);
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
        Route::apiResource('addresses',AddressController::class)->only(['index','show','store','destroy']);
        Route::apiResource('orders',OrderController::class)->only(['index','show','store']);
    });

});




