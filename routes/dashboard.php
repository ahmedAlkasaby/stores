<?php

use App\Http\Controllers\Dashboard\ActivityLogController;
use App\Http\Controllers\Dashboard\AdditionController;
use App\Http\Controllers\Dashboard\AddressController;
use App\Http\Controllers\Dashboard\AuthController;
use App\Http\Controllers\Dashboard\BrandController;
use App\Http\Controllers\Dashboard\CacheController;
use App\Http\Controllers\Dashboard\CategoryController;
use App\Http\Controllers\dashboard\CityController;
use App\Http\Controllers\Dashboard\ContactController;
use App\Http\Controllers\dashboard\CouponController;
use App\Http\Controllers\dashboard\DeliveryTimeController;
use App\Http\Controllers\Dashboard\HomeController;
use App\Http\Controllers\Dashboard\NotificationController;
use App\Http\Controllers\dashboard\OrderController;
use App\Http\Controllers\dashboard\PageController;
use App\Http\Controllers\Dashboard\PaymentController;
use App\Http\Controllers\Dashboard\ProductController;
use App\Http\Controllers\Dashboard\ProfileController;
use App\Http\Controllers\dashboard\RegionController;
use App\Http\Controllers\dashboard\ReviewController;
use App\Http\Controllers\Dashboard\RoleController;
use App\Http\Controllers\Dashboard\ServiceController;
use App\Http\Controllers\dashboard\SettingController;
use App\Http\Controllers\Dashboard\SizeController;
use App\Http\Controllers\Dashboard\SliderController;
use App\Http\Controllers\Dashboard\UnitController;
use App\Http\Controllers\Dashboard\UserController;
use App\Http\Controllers\Dashboard\WishlistController;
use Illuminate\Support\Facades\Route;






// Route::get('test_broad_cast_event', function () {
//     event(new \App\Events\BroadCastTestEvent('Hello, this is a test message!'));
//     return 'Event has been broadcasted!';
// })->name('test.broad.cast.event');

// Route::get('test_broad_cast', function () {
//     return view('test_broad_cast');
// })->name('test.broad.cast');
Route::group(['middleware' => 'guest'], function () {
    Route::get('login', [AuthController::class, 'viewLogin'])->name('login.view');
    Route::post('login', [AuthController::class, 'login'])->name('login.login');
});

Route::group(['middleware' => ['auth', 'admin', 'check.permission']], function () {
    Route::get('/', [HomeController::class, 'index'])->name('home.index');
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
    Route::group(['prefix' => 'profile'], function () {
        Route::get('change_lang/{lang}', [ProfileController::class, 'changeLang'])->name('profile.change.lang');
        Route::get('change_theme/{theme}', [ProfileController::class, 'changeTheme'])->name('profile.change.theme');
    });
    // Resource routes for roles
    Route::resource('roles', RoleController::class);
    // Resource routes for users
    Route::resource('users', UserController::class);
    Route::get('users/active/{user}', [UserController::class, 'active'])->name('users.active');

    // Resource routes for stores
    Route::resource('services', ServiceController::class);
    Route::get('services/active/{service}', [ServiceController::class, 'active'])->name('services.active');

    // Resource routes for sizes
    Route::resource('sizes', SizeController::class);
    Route::get('sizes/restore/{size}', [SizeController::class, 'restore'])->name('sizes.restore');
    Route::delete('sizes/force_delete/{size}', [SizeController::class, 'forceDelete'])->name('sizes.force_delete');
    Route::get("sizes/active/{size}", [SizeController::class, 'active'])->name('sizes.active');

    // Resource routes for brands
    Route::resource('brands', BrandController::class);
    Route::get('brands/restore/{brand}', [BrandController::class, 'restore'])->name('brands.restore');
    Route::delete('brands/force_delete/{brand}', [BrandController::class, 'forceDelete'])->name('brands.force_delete');
    Route::get('brands/active/{brand}', [BrandController::class, 'active'])->name('brands.active');

    // Resource routes for units
    Route::resource('units', UnitController::class);
    Route::get('units/restore/{unit}', [UnitController::class, 'restore'])->name('units.restore');
    Route::delete('units/force_delete/{unit}', [UnitController::class, 'forceDelete'])->name('units.force_delete');
    Route::get('units/toggle_active/{unit}', [UnitController::class, 'active'])->name('units.active');
    // Resource routes for additions
    Route::resource('additions', AdditionController::class);
    Route::get('additions/restore/{addition}', [AdditionController::class, 'restore'])->name('additions.restore');
    Route::delete('additions/force_delete/{addition}', [AdditionController::class, 'forceDelete'])->name('additions.force_delete');
    Route::get('additions/active/{addition}', [AdditionController::class, 'active'])->name('additions.active');

    //Resource routes for categories
    Route::resource('categories', CategoryController::class);
    Route::get('categories/restore/{category}', [CategoryController::class, 'restore'])->name('categories.restore');
    Route::delete('categories/force_delete/{category}', [CategoryController::class, 'forceDelete'])->name('categories.force_delete');
    Route::get('categories/active/{category}', [CategoryController::class, 'active'])->name('categories.active');

    //Resource routes for cities
    Route::resource('cities', CityController::class);
    Route::get('cities/restore/{city}', [CityController::class, 'restore'])->name('cities.restore');
    Route::delete('cities/force_delete/{city}', [CityController::class, 'forceDelete'])->name('cities.force_delete');
    Route::get('cities/active/{city}', [CityController::class, 'active'])->name('cities.active');

    //Resource routes for regions
    Route::resource('regions', RegionController::class);
    Route::get('regions/restore/{region}', [RegionController::class, 'restore'])->name('regions.restore');
    Route::delete('regions/force_delete/{region}', [RegionController::class, 'forceDelete'])->name('regions.force_delete');
    Route::get('regions/active/{region}', [RegionController::class, 'active'])->name('regions.active');

    //Resource routes for settings
    Route::resource('settings', SettingController::class);

    //contacts
    Route::resource('contacts', ContactController::class);
    Route::get('contacts/active/{contact}', [ContactController::class, 'seen'])->name('contacts.seen');
    Route::post("messages/send/{contact}", [ContactController::class, "sendMessage"])->name("contacts.sendMessage");

    //Resource Route for delivery_times
    Route::resource('delivery_times', DeliveryTimeController::class);
    Route::get('delivery_times/active/{delivery_time}', [DeliveryTimeController::class, 'active'])->name('delivery_times.active');

    //Resourse route for pages
    Route::resource('pages', PageController::class);
    Route::get('pages/active/{page}', [PageController::class, 'active'])->name('pages.active');

    //Resourse route for payments
    Route::resource('payments', PaymentController::class);
    Route::get('payments/active/{payment}', [PaymentController::class, 'active'])->name('payments.active');

    //Resourse route for addresses
    Route::resource('addresses', AddressController::class);

    //Resource route for Slider
    Route::resource('sliders', SliderController::class);
    Route::get('sliders/active/{slider}', [SliderController::class, 'active'])->name('sliders.active');

    //Resourse route for Favourites
    Route::resource('wishlists', WishlistController::class);

     //Resource route for Orders
    Route::resource('orders', OrderController::class);
    Route::get('orders/cancel/{order}', [OrderController::class, 'cancel'])->name('orders.cancel');
    Route::post('orders/change_status/{order}', [OrderController::class, 'changeStatus'])->name('orders.change_status');

    //Resource route for Coupons
    Route::resource('coupons', CouponController::class);
    Route::get('coupons/active/{coupon}', [CouponController::class, 'active'])->name('coupons.active');
    Route::get('coupons/finish/{coupon}', [CouponController::class, 'finish'])->name('coupons.finish');

    // Pesdource Route for Products
    Route::resource('products', ProductController::class);
    Route::get('products/active/{product}', [ProductController::class, 'active'])->name('products.active');
    Route::get('products/feature/{product}', [ProductController::class, 'feature'])->name('products.feature');
    Route::get('products/returned/{product}', [ProductController::class, 'returned'])->name('products.returned');
    Route::get('getCategoryByService/{id}', [ProductController::class, 'getCategoryByService']);

    //Resource route for reviews
    Route::resource('reviews', ReviewController::class);

    //Resource route for activity_logs
   Route::get('activity_logs', [ActivityLogController::class, 'index'])->name('activity_logs.index');

    //Resource route for notifications
    Route::resource('notifications', NotificationController::class)->only(['index','create','store','show']);
    Route::get('notifications/mark_as_read/{id}', [NotificationController::class, 'markAsRead']);

  

    // Cache management
    Route::get('cache/clear', [CacheController::class, 'index'])->name('cache');

    




});
