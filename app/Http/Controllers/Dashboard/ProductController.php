<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\Service;
use App\Models\Size;
use App\Models\Unit;
use App\Services\ImageHandlerService;
use App\Services\ProductService;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Event;

class ProductController extends MainController
{
    protected $imageService;
    protected $productService;

    public function __construct(ImageHandlerService $imageService, ProductService $productService)
    {
        parent::__construct();
        $this->setClass('ptoducts');
        $this->imageService = $imageService;
        $this->productService = $productService;
    }

    public function index()
    {
        //
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
        dd($request->all());
        $data = $request->except('image');

        $data['image'] = $this->imageService->uploadImage('products', $request);

        $product = Product::create($data);
        $product->categories()->sync($request->categories);

        $this->productService->handleProductChildren($request, $product);

        return redirect()->route('dashboard.products.index')->with('success', __('site.product_created_successfully'));
    }


    public function show(string $id)
    {
        //
    }

      public function edit(string $id)
    {
        //
    }


    public function update(Request $request, Product $product)
    {
        $data = $request->except('image');

        if ($request->hasFile('image')) {
            $data['image'] = $this->imageService->uploadImage('products', $request);
        }

        $product->update($data);
        $product->categories()->sync($request->categories);

        $this->productService->handleProductChildren($request, $product);

        return redirect()->route('dashboard.products.index')->with('success', __('site.product_updated_successfully'));
    }




    public function destroy(string $id)
    {
        //
    }
}
