<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Api\MainController;
use App\Http\Requests\Api\ProductRequest;
use App\Http\Resources\Api\ProductCollection;
use App\Http\Resources\Api\ProductResource;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends MainController
{

    public function index(ProductRequest $request)
    {
        $products =Product::with(['categories','service','unit','size','brand','children'])->filter($request)->paginate($this->perPage);
        return $this->sendData(new ProductCollection($products));
    }



    public function show(string $id)
    {
        $product = Product::with(['categories','service','unit','size','brand','children'])->find($id);
        if (!$product) {
            return $this->sendError(__('site.not_found_product'), 404);
        }
        return $this->sendData(new ProductResource($product));

    }


}
