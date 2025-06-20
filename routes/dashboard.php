<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\AuthController;
use App\Http\Controllers\Dashboard\HomeController;
use App\Http\Controllers\Dashboard\ProfileController;
use App\Http\Controllers\dashboard\StoreTypeController;






Route::group(['middleware'=>'guest'], function () {
    Route::get('login', [AuthController::class, 'viewLogin'])->name('login.view');
    Route::post('login', [AuthController::class, 'login'])->name('login.login');
});

Route::group(['middleware'=>['auth','admin']],function(){
    Route::get('/',[HomeController::class, 'index'])->name('home');
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
    Route::group(['prefix'=>'profile'], function () {
        Route::get('change_lang/{lang}', [ProfileController::class, 'changeLang'])->name('profile.change.lang');
        Route::get('change_theme/{theme}', [ProfileController::class, 'changeTheme'])->name('profile.change.theme');
    });
    Route::get('store_types/deleted', [StoreTypeController::class, 'deleted'])->name('store_types.deleted');
    Route::resource('store_types', StoreTypeController::class);
    Route::get('store_types/restore/{store_type}', [StoreTypeController::class, 'restore'])->name('store_types.restore');
    Route::delete('store_types/force_delete/{store_type}', [StoreTypeController::class, 'forceDelete'])->name('store_types.force_delete');
    });
