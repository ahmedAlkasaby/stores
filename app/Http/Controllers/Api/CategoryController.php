<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\CategoryRequest;
use App\Http\Resources\Api\CategoryCollection;
use App\Http\Resources\Api\CategoryResource;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends MainController
{

    public function index(CategoryRequest $request)
    {
        $categories = Category::withCount('products')->filter($request)->with('service')->paginate($this->perPage);
        return $this->sendData(new CategoryCollection($categories));
    }


    public function show(string $id)
    {
        $category = Category::with(['service', 'children'])->find($id);
        if (!$category) {
            return $this->sendError(__('api.category_not_found'), 404);
        }
        return $this->sendData(new CategoryResource($category));
    }


}
