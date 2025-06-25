<?php

namespace App\Http\Controllers\dashboard;

use App\Models\StoreType;
use App\Http\Controllers\Dashboard\MainController;
use App\Http\Requests\Dashboard\StoreTypeRequest;
use App\Models\Store;
use App\Services\ImageHandlerService;
use Illuminate\Http\Request;

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
        if ($request->hasFile('image')) {
            $imageUrl = $this->imageService->uploadImage($request->file('image'), 'store_types');
        }
        $data=$request->except('image');
        $data['image'] = $imageUrl;

        StoreType::create($data);

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
        if ($request->hasFile('image')) {
            if ($storeType->image) {
                $this->imageService->deleteImage($storeType->image);
            }
            $imageUrl = $this->imageService->uploadImage($request->file('image'), 'store_types');
        }

        $data = $request->except('image');
        if (isset($imageUrl)) {
            $data['image'] = $imageUrl;
        }
        $storeType->update($data);

        return redirect()->route('dashboard.store_types.index')->with('success', __('site.store_type_updated_successfully'));
    }


    public function destroy(string $id)
    {
        $storeType = StoreType::findOrFail($id);
        $storeType->delete();
        return redirect()->route('dashboard.store_types.index')->with('success', __('site.store_type_deleted_successfully'));
    }
    public function active(StoreType $storeType)
    {
        $storeType->active = !$storeType->active;
        $storeType->save();
        return back();
    }
}
