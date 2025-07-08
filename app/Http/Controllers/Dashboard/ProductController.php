<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\Service;
use App\Models\Size;
use App\Models\Unit;
use Illuminate\Http\Request;

class ProductController extends MainController
{
    public function __construct()
    {
        parent::__construct();
        $this->setClass('ptoducts');
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
}
