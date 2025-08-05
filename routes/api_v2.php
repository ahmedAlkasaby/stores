<?php

use App\Http\Controllers\Api\V2\HomeController;
use Illuminate\Support\Facades\Route;



Route::group(['middleware'=>['userLangApi','checkSettingOpen']],function(){
    Route::get('home',[HomeController::class,'index']);
});