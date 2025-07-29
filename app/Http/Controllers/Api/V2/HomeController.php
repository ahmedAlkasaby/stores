<?php

namespace App\Http\Controllers\Api\V2;

use App\Http\Controllers\Api\MainController;
use App\Http\Controllers\Controller;
use App\Http\Resources\Api\V2\HomeCollection;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class HomeController extends MainController
{
     public function index(){
        $data=['categories','service','unit','size','brand','children'];
        $products=Cache::remember('data_products', now()->addHours(2), function () use($data) {
            return Product::with($data)->filter()->paginate($this->perPage);
        });

        $data=new HomeCollection($products);

        return $this->sendData($data);
    }
}
