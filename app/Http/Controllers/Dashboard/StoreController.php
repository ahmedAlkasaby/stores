<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Store;
use App\Models\StoreType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\ImageHandlerService;
use App\Http\Requests\dashboard\StoreRequest;

class StoreController extends MainController
{

    protected $imageService;


    public function __construct(ImageHandlerService $imageService)
    {
        parent::__construct();
        $this->setClass('stores');
        $this->imageService = $imageService;
    }
    public function index()
    {
        $stores = Store::with('storeType')->filter(request(), "dashboard")->paginate($this->perPage);
        $storeTypes = StoreType::active()->get();
        return view('admin.stores.index', compact('stores', 'storeTypes'));
    }


    public function create()
    {
        $storeTypes = StoreType::active()->get();
        return view('admin.stores.create', compact('storeTypes'));
    }


    public function store(StoreRequest $request)
    {
        if ($request->hasFile('image')) {
            $imageUrl = $this->imageService->uploadImage($request->file('image'), 'stores');
        }
        $data= $request->except('image');
        $data['image'] = $imageUrl ?? null;

        Store::create($data);

        return redirect()->route('dashboard.stores.index')->with('success', __('site.store_created_successfully'));
    }

    public function show(string $id)
    {
        $store = Store::with('storeType')->findOrFail($id);
        $storeTypes = StoreType::active()->get();
        return view('admin.stores.show', compact('store', 'storeTypes'));
    }


    public function edit(string $id)
    {
        $store = Store::findOrFail($id);
        $storeTypes = StoreType::active()->get();
        return view('admin.stores.edit', compact('store', 'storeTypes'));
    }


    public function update(StoreRequest $request, string $id)
    {
        $store = Store::findOrFail($id);
        if ($request->hasFile('image')) {
            if ($store->image) {
                $this->imageService->deleteImage($store->image);
            }
            $imgUrl = $this->imageService->uploadImage($request->file('image'), 'stores');
        }
        $data = $request->except('image');
        $data['image'] = $imgUrl ?? $store->image;

        $store->update($data);

        return redirect()->route('dashboard.stores.index')->with('success', __('site.store_updated_successfully'));
    }


    public function destroy(string $id)
    {
        $store = Store::findOrFail($id);
        if ($store->image) {
            $this->imageService->deleteImage($store->image);
        }
        $store->delete();
        return redirect()->route('dashboard.stores.index')->with('success', __('site.store_deleted_successfully'));
    }


    public function active(Store $store)
    {
        $store->active = !$store->active;
        $store->save();
        return back();
    }
}
