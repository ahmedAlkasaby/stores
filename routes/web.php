
<?php

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::fallback(function () {
    return redirect('/dashboard');
});

Route::get('/http-test', function () {
    $response = Http::get('https://jsonplaceholder.typicode.com/posts/1');

    return $response->json();
});

Route::get('/paymob-test', function () {
    $response = Http::post('https://accept.paymob.com/api/auth/tokens', [
        'api_key' => env('PAYMOB_API_KEY')
    ]);

    return $response->json();
});
Route::get('/paymob-order-test',function(){
    $authToken = Http::post('https://accept.paymob.com/api/auth/tokens', [
        'api_key' => env('PAYMOB_API_KEY')
    ])['token'];

    // 2) ابعت طلب إنشاء Order
    $order = Http::post('https://accept.paymob.com/api/ecommerce/orders', [
        'auth_token' => $authToken,
        'delivery_needed' => false,
        'amount_cents' => 10000, // يعني 100 جنيه (لازم تكون بالقروش)
        'currency' => "EGP",
        'items' => []
    ]);

    return $order->json(); // ده هيطبعلك بيانات الـ Order
});

Route::get('/paymob-payment-key-test',function()
{
    // 1) هات Auth Token
    $authToken = Http::post('https://accept.paymob.com/api/auth/tokens', [
        'api_key' => env('PAYMOB_API_KEY')
    ])['token'];

    // 2) اعمل Order الأول
    $order = Http::post('https://accept.paymob.com/api/ecommerce/orders', [
        'auth_token' => $authToken,
        'delivery_needed' => false,
        'amount_cents' => 10000, // 100 جنيه
        'currency' => "EGP",
        'items' => []
    ])->json();

    $orderId = $order['id']; // خد رقم الـ Order

    // 3) اطلب Payment Key
    $paymentKey = Http::post('https://accept.paymob.com/api/acceptance/payment_keys', [
        'auth_token' => $authToken,
        'amount_cents' => 10000, // نفس المبلغ بتاع الـ Order
        'expiration' => 3600,
        'order_id' => $orderId,
        'billing_data' => [
            "apartment" => "NA",
            "email" => "customer@example.com",
            "floor" => "NA",
            "first_name" => "Omar",
            "street" => "Test Street",
            "building" => "123",
            "phone_number" => "+201000000000",
            "shipping_method" => "PKG",
            "postal_code" => "12345",
            "city" => "Cairo",
            "country" => "EG",
            "last_name" => "Ali",
            "state" => "NA"
        ],
        'currency' => "EGP",
        'integration_id' => env('PAYMOB_INTEGRATION_ID'), 
    ])->json();

    
    $paymentToken = $paymentKey['token']; // خد الـ Payment Token
    $iframeId = env('PAYMOB_IFRAME_ID'); // خد رقم الـ
    return redirect("https://accept.paymob.com/api/acceptance/iframes/$iframeId?payment_token=$paymentToken");

});
