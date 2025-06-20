<?php

namespace App\Http\Controllers\dashboard;

use App\Models\StoreType;
use App\Http\Controllers\Dashboard\MainController;
use App\Http\Requests\Dashboard\StoreTypeRequest;
use App\Models\Store;
use App\Services\StoreTypeService;

class StoreTypeController extends MainController
{

    protected $storeTypeService;


    public function __construct(StoreTypeService $storeTypeService)
    {
        parent::__construct();
        $this->setClass('store_types');
        $this->storeTypeService = $storeTypeService;
    }
    public function index()
    {
        $storeTypes = StoreType::filter(request(), "dashboard")->paginate($this->perPage);
        return view('admin.store_type.index', compact('storeTypes'));
    }


    public function create()
    {
        return view('admin.store_type.create');
    }


    public function store(StoreTypeRequest $request)
    {
        $imageUrl = $this->storeTypeService->uploadImage($request->file('image'));
        StoreType::create([
            'name' => [
                "ar" => $request->name_ar,
                "en" => $request->name_en,
            ],
            'description_' => [
                "ar" => $request->description_ar,
                "en" => $request->description_en,
            ],
            'image' => $imageUrl,
        ]);

        return redirect()->route('dashboard.store_type.index')->with('success', 'Store type created successfully');
    }


    public function show(string $id)
    {
        //
    }


    public function edit(string $id)
    {
        $storeType = StoreType::findOrFail($id);
        return view('admin.store_type.edit', compact('storeType'));
    }

   
    public function update(StoreTypeRequest $request, string $id)
    {
        $storeType = StoreType::findOrFail($id);
        $imageUrl = "";
        if ($request->hasFile('image')) {
            $this->storeTypeService->deleteImage($storeType->image);
            $imageUrl = $this->storeTypeService->uploadImage($request->file('image'));
        }

        $storeType->update([
            'name' => [
                "ar" => $request->name_ar,
                "en" => $request->name_en,
            ],
            'description_' => [
                "ar" => $request->description_ar,
                "en" => $request->description_en,
            ],
            'image' => $imageUrl,
        ]);

        return redirect()->route('dashboard.store_type.index')->with('success', 'Store type updated successfully');
    }


    public function destroy(string $id)
    {
        $storeType = StoreType::findOrFail($id);
        $storeType->delete();
        return redirect()->route('dashboard.store_types.index')->with('success', 'Store type deleted successfully');
    }
    public function deleted()
    {
        $storeTypes = StoreType::onlyTrashed()->filter(request("search"), true, "dashboard")->paginate(50);
        return view("admin.store_type.deleted", compact("storeTypes"));
    }
    public function restore($sliderId)
    {
        $storeType = StoreType::withTrashed()->findOrFail($sliderId);
        $storeType->restore();
        return back();
    }
    public function forceDelete($sliderId)
    {
        $storeType = StoreType::withTrashed()->findOrFail($sliderId);
        if ($storeType->image) {
            $this->storeTypeService->deleteImage($storeType->image);
        }
        $storeType->forceDelete();
        return back();
    }
}
