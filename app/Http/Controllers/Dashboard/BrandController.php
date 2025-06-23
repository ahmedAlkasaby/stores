<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Brand;
use Illuminate\Http\Request;
use App\Http\Controllers\Dashboard\MainController;
use App\Http\Requests\dashboard\BrandRequest;
use App\Services\ImageHandlerService;

class BrandController extends MainController
{
    /**
     * Display a listing of the resource.
     */
    protected $imageService;

    public function __construct(ImageHandlerService $imageService)
    {
        parent::__construct();
        $this->setClass('brands');
        $this->imageService = $imageService;
    }
    public function index()
    {
        $brands = Brand::filter(request(), "dashboard")->paginate($this->perPage);
        return view('admin.brands.index', compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.brands.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BrandRequest $request)
    {
        $imageUrl = "";

        if ($request->hasFile('image')) {
            $imageUrl = $this->imageService->uploadImage($request->file('image'), 'brands');
        }
        Brand::create([
            "name" => [
                "ar" => $request->name_ar,
                "en" => $request->name_en
            ],
            "description" => [
                "ar" => $request->description_ar,
                "en" => $request->description_en
            ],
            "active" => $request->active,
            "order_id" => $request->order_id,
            "image" => $imageUrl,
        ]);
        return redirect()->route('dashboard.brands.index')->with('success', __('site.brand_created_successfully'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $brand = Brand::findOrFail($id);
        return view('admin.brands.show', compact('brand'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $brand = Brand::findOrFail($id);
        return view('admin.brands.edit', compact('brand'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $brand = Brand::findOrFail($id);
        $imageUrl = $brand->image ?? "";

        if ($request->hasFile('image')) {
            // Delete the old image if it exists
            if ($imageUrl) {
                $this->imageService->deleteImage($imageUrl);
            }
            $imageUrl = $this->imageService->uploadImage($request->file('image'), 'brands');
        }

        $brand->update([
            "name" => [
                "ar" => $request->name_ar,
                "en" => $request->name_en
            ],
            "description" => [
                "ar" => $request->description_ar,
                "en" => $request->description_en
            ],
            "active" => $request->active,
            "order_id" => $request->order_id,
            "image" => $imageUrl,
        ]);

        return redirect()->route('dashboard.brands.index')->with('success', __('site.brand_updated_successfully'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if(Brand::find($id)->products()->count() > 0){
            return redirect()->route('dashboard.brands.index')->with('error', __('site.brand_has_products'));
        }
        $brand = Brand::findOrFail($id);
        $brand->delete();
        return redirect()->route('dashboard.brands.index')->with('success', __('site.brand_deleted_successfully'));
    }
    public function toggleActive(string $id)
    {
        $brand = Brand::withTrashed()->where('id', $id)->first();
        $brand->active = !$brand->active;
        $brand->save();
        return redirect()->back()->with('success', __('site.brand_status_updated_successfully'));
    }
    public function restore($brandId)
    {
        $brand = Brand::withTrashed()->findOrFail($brandId);
        $brand->restore();
        return back()->with('success', __('site.brand_restored_successfully'));
    }
    public function forceDelete($brandId)
    {
        $brand = Brand::withTrashed()->findOrFail($brandId);
        if ($brand->image) {
            $this->imageService->deleteImage($brand->image);
        }
        $brand->forceDelete();
        return back()->with('success', __('site.brand_deleted_successfully'));
    }
}
