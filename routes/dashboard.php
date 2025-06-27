<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\AuthController;
use App\Http\Controllers\Dashboard\HomeController;
use App\Http\Controllers\Dashboard\SizeController;
use App\Http\Controllers\Dashboard\UnitController;
use App\Http\Controllers\Dashboard\BrandController;
use App\Http\Controllers\Dashboard\StoreController;
use App\Http\Controllers\Dashboard\ProfileController;
use App\Http\Controllers\Dashboard\AdditionController;
use App\Http\Controllers\Dashboard\CategoryController;
use App\Http\Controllers\dashboard\StoreTypeController;






Route::group(['middleware' => 'guest'], function () {
    Route::get('login', [AuthController::class, 'viewLogin'])->name('login.view');
    Route::post('login', [AuthController::class, 'login'])->name('login.login');
});

Route::group(['middleware' => ['auth', 'admin', 'check.permission']], function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
    Route::group(['prefix' => 'profile'], function () {
        Route::get('change_lang/{lang}', [ProfileController::class, 'changeLang'])->name('profile.change.lang');
        Route::get('change_theme/{theme}', [ProfileController::class, 'changeTheme'])->name('profile.change.theme');
    });
    // Resource routes for store types
    Route::resource('store_types', StoreTypeController::class);
    Route::get('store_types/active/{storeType}', [StoreTypeController::class, 'active'])->name('store_types.active');

    // Resource routes for stores
    Route::resource('stores', StoreController::class);
    Route::get('stores/active/{store}', [StoreController::class, 'active'])->name('stores.active');


    // Resource routes for sizes
    Route::resource('sizes', SizeController::class);
    Route::get('sizes/restore/{size}', [SizeController::class, 'restore'])->name('sizes.restore');
    Route::delete('sizes/force_delete/{size}', [SizeController::class, 'forceDelete'])->name('sizes.force_delete');
    Route::get("sizes/toogle_active/{size}", [SizeController::class, 'toggleActive'])->name('sizes.active');

    // Resource routes for brands
    Route::resource('brands', BrandController::class);
    Route::get('brands/restore/{brand}', [BrandController::class, 'restore'])->name('brands.restore');
    Route::delete('brands/force_delete/{brand}', [BrandController::class, 'forceDelete'])->name('brands.force_delete');
    Route::get('brands/toggle_active/{brand}', [BrandController::class, 'toggleActive'])->name('brands.active');

    // Resource routes for units
    Route::resource('units', UnitController::class);
    Route::get('units/restore/{unit}', [UnitController::class, 'restore'])->name('units.restore');
    Route::delete('units/force_delete/{unit}', [UnitController::class, 'forceDelete'])->name('units.force_delete');
    Route::get('units/toggle_active/{unit}', [UnitController::class, 'toggleActive'])->name('units.active');
    // Resource routes for additions 
    Route::resource('additions', AdditionController::class);
    Route::get('additions/restore/{addition}', [AdditionController::class, 'restore'])->name('additions.restore');
    Route::delete('additions/force_delete/{addition}', [AdditionController::class, 'forceDelete'])->name('additions.force_delete');
    Route::get('additions/toggle_active/{addition}', [AdditionController::class, 'toggleActive'])->name('additions.active');

    //Resource routes for categories
    Route::resource('categories', CategoryController::class);
    Route::get('categories/restore/{category}', [CategoryController::class, 'restore'])->name('categories.restore');
    Route::delete('categories/force_delete/{category}', [CategoryController::class, 'forceDelete'])->name('categories.force_delete');
    Route::get('categories/toggle_active/{category}', [CategoryController::class, 'toggleActive'])->name('categories.active');
});
