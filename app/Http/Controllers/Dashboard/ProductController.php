<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Size;
use App\Models\Unit;
use App\Models\Brand;
use App\Models\Product;
use App\Models\Service;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends MainController
{
    public function __construct()
    {
        parent::__construct();
        $this->setClass('products');
    }

    public function index(Request $request)
    {
        $products=Product::with(['categories','service','unit','size','brand','children'])->filter($request,'admin')->paginate($this->perPage);
        $units=Unit::active()->get()->mapWithKeys(function ($unit) {
            return [$unit->id => $unit->nameLang()];
        })->toArray();
        $brands=Brand::active()->get()->mapWithKeys(function ($brand) {
            return [$brand->id => $brand->nameLang()];
        })->toArray();
        $categories = Category::active()
        ->get()
        ->mapWithKeys(function ($category) {
            return [$category->id => $category->nameLang()];
        })->toArray();
        return view('admin.products.index',get_defined_vars());
    }

    public function create()
    {
        $services=Service::active()->get();
        $brands=Brand::active()->get();
        $units=Unit::active()->get();
        $sizes=Size::active()->get();

        $categories = Category::active()
        ->with('parent')
        ->get()
        ->mapWithKeys(function ($category) {
            $label = $category->parent ? $category->parent->nameLang() . ' > ' . $category->nameLang() : $category->nameLang();
            return [$category->id => $label];
        });

        return view('admin.products.create',get_defined_vars());
    }


    public function store(Request $request)
    {
        //
    }


    public function show(string $id)
    {
        //
    }

      public function edit(string $id)
    {
        //
    }


    public function update(Request $request, string $id)
    {
        //
    }


    public function destroy(string $id)
    {
        //
    }
    public function active(Product $product)
    {
        $product->active = !$product->active;
        $product->save();
        return response()->json(['success' => true]);
    }
    public function feature(Product $product)
    {
        $product->feature = !$product->feature;
        $product->save();
        return response()->json(['success' => true]);
    }
    public function offer(Product $product)
    {
        $product->offer = !$product->offer;
        $product->save();
        return response()->json(['success' => true]);
    }
    public function shipping_free(Product $product)
    {
        $product->shipping_free = !$product->shipping_free;
        $product->save();
        return response()->json(['success' => true]);
    }
    public function returned(Product $product)
    {
        $product->returned = !$product->returned;
        $product->save();
        return response()->json(['success' => true]);
    }
}
