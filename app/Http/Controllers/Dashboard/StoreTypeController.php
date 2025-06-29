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
            $imageUrl = $this->imageService->uploadImage('store_types', $request);
        }
        $data = $request->except('image');
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
        $imgUrl = $this->imageService->editImage($request, $storeType, 'storeTypes');
        $data = $request->except('image');
        $data['image'] = $imgUrl ?? $storeType->image;
        $storeType->update($data);

        return redirect()->route('dashboard.store_types.index')->with('success', __('site.store_type_updated_successfully'));
    }


    public function destroy(StoreType $storeType)
    {
        if ($storeType->stores()->count() > 0) {
            return back()->with('error', __('site.store_type_has_stores'));
        }
        $storeType->delete();
        return redirect()->route('dashboard.store_types.index')->with('success', __('site.store_type_deleted_successfully'));
    }
    public function active(StoreType $storeType)
    {
        $storeType->update([
            'active' => ! ($storeType->active),
        ]);
        return response()->json([
            'success' => true,
            'active' => $storeType->active,
        ]);
    }
}
