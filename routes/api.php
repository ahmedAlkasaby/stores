<?php

use App\Http\Controllers\Api\Auth\AuthController;
use App\Http\Controllers\Api\Auth\ForgetPasswordController;
use App\Http\Controllers\Api\Auth\RestPasswordController;
use App\Http\Controllers\Api\Auth\VerfiedController;
use App\Http\Controllers\Api\CartItemController;
use App\Http\Controllers\Api\WishListController;
use Illuminate\Http\Request;
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



Route::group(['prefix'=>'auth','middleware'=>'userLangApi'],function(){
    Route::post('register/check',[AuthController::class, 'check_register']);
    Route::post('register',[AuthController::class,'register']);
    Route::post('login',[AuthController::class,'login']);
    Route::post('logout',[AuthController::class,'logout'])->middleware('auth-api');
    Route::post('forget/password',[ForgetPasswordController::class,'ForgetPassword']);
    Route::post('rest/password',[RestPasswordController::class,'RestPassword']);
});

Route::group(['middleware'=>['auth-api','userLangApi']],function(){
    Route::get('wishlists',[WishListController::class,'index']);
    Route::post('wishlists',[WishListController::class,'toggle']);
    Route::apiResource('cart_items',CartItemController::class)->only(['index','show','store','destroy']);
});


