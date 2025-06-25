<?php

namespace App\Http\Controllers\dashboard;

use App\Models\StoreType;
use App\Http\Controllers\Dashboard\MainController;
use App\Http\Requests\Dashboard\StoreTypeRequest;
use App\Models\Store;
use App\Services\ImageHandlerService;

class StoreTypeController extends MainController
{

    protected $imageService;


    public function __construct(ImageHandlerService $imageService)
    {
        parent::__construct();
        $this->setClass('store_types');
        $this->imageService = $imageService;
    }
    public function index()
    {
        $storeTypes = StoreType::filter(request(), "dashboard")->paginate($this->perPage);
        return view('admin.store_types.index', compact('storeTypes'));
    }


    public function create()
    {
        return view('admin.store_types.create');
    }


    public function store(StoreTypeRequest $request)
    {
        dd($request->all());
        $imageUrl = "";

        if ($request->hasFile('image')) {
            $imageUrl = $this->imageService->uploadImage($request->file('image'), 'store_types');
        }

        StoreType::create([
            'name' => [
                "ar" => $request->name_ar,
                "en" => $request->name_en,
            ],
            'description' => [
                "ar" => $request->description_ar,
                "en" => $request->description_en,
            ],
            'image' => $imageUrl,
        ]);

        return redirect()->route('dashboard.store_types.index')->with('success', __('site.store_type_created_successfully'));
    }


    public function show(string $id)
    {
        $storeType = StoreType::findOrFail($id);
        return view('admin.store_types.show', compact('storeType'));
    }


    public function edit(string $id)
    {
        $storeType = StoreType::findOrFail($id);
        return view('admin.store_types.edit', compact('storeType'));
    }


    public function update(StoreTypeRequest $request, string $id)
    {
        $storeType = StoreType::findOrFail($id);
        $imageUrl = "";
        $imageUrl = $this->imageService->editImage($request, $storeType);


        $storeType->update([
            'name' => [
                "ar" => $request->name_ar,
                "en" => $request->name_en,
            ],
            'description' => [
                "ar" => $request->description_ar,
                "en" => $request->description_en,
            ],
            'image' => $imageUrl,
        ]);

        return redirect()->route('dashboard.store_types.index')->with('success', __('site.store_type_updated_successfully'));
    }


    public function destroy(string $id)
    {
        $storeType = StoreType::findOrFail($id);
        $storeType->delete();
        return redirect()->route('dashboard.store_types.index')->with('success', __('site.store_type_deleted_successfully'));
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
            $this->imageService->deleteImage($storeType->image);
        }
        $storeType->forceDelete();
        return back()->with('success', __('site.store_type_deleted_successfully'));
    }
}
