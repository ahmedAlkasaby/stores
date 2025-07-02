<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\Api\HomeCollection;
use App\Models\Product;
use App\Models\Slider;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class HomeController extends MainController
{
    public function index(){
        $products=Product::with(['categories','store','unit','size','brand','storeType','children'])->filter()->paginate($this->perPage);

        $data=new HomeCollection($products);

        return $this->sendData($data);
    }


}
