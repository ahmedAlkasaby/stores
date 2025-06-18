<?php

use App\Http\Controllers\Dashboard\AuthController;
use App\Http\Controllers\Dashboard\HomeController;
use Illuminate\Support\Facades\Route;





Route::group(['middleware'=>'guest'], function () {
    Route::get('login', [AuthController::class, 'viewLogin'])->name('login.view');
    Route::post('login', [AuthController::class, 'login'])->name('login.login');
});

Route::group(['middleware'=>['auth','admin']],function(){
    Route::get('/',[HomeController::class, 'index'])->name('home');
    Route::get('logout', function () {
        auth()->logout();
        return redirect()->route('dashboard.login.view')->with('success', __('auth.logout_successfully'));
    })->name('logout');
});
