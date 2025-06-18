<?php

use App\Http\Controllers\Dashboard\AuthController;
use Illuminate\Support\Facades\Route;




Route::group(['middleware'=>'guest'], function () {
    Route::get('login', [AuthController::class, 'viewLogin'])->name('login.view');
    Route::post('login', [AuthController::class, 'login'])->name('login.login');
});

Route::group(['middleware'=>['auth','admin']],function(){
    Route::get('/',function(){
        return __('site.dashboard');
    })->name('home');
    Route::get('logout', function () {
        auth()->logout();
        return redirect()->route('dashboard.login.view')->with('success', __('auth.logout_successfully'));
    })->name('logout');
});
