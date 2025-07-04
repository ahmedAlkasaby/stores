<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Store;
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
        $imageUrl = $this->imageService->uploadImage('stores', $request);

        $data = $request->except('image');
        $data['image'] = $imageUrl ;
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

        $imgUrl = $this->imageService->editImage($request, $store, 'stores');

        $data = $request->except('image');
        $data['image'] = $imgUrl ?? $store->image;

        $store->update($data);

        return redirect()->route('dashboard.stores.index')->with('success', __('site.store_updated_successfully'));
    }


    public function destroy(Store $store)
    {
        $this->imageService->deleteImage($store->image);
        $store->delete();
        return redirect()->route('dashboard.stores.index')->with('success', __('site.store_deleted_successfully'));
    }



    public function active(Store $store)
    {
        $store->update([
            'active' => !($store->active),
        ]);
        return response()->json([
            'success' => true,
            'active' => $store->active,
        ]);
    }
}
