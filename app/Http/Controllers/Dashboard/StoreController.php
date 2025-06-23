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
        $storeTypes = StoreType::all();
        return view('admin.stores.index', compact('stores', 'storeTypes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $storeTypes = StoreType::all();
        return view('admin.stores.create', compact('storeTypes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        $imageUrl = "";
        if ($request->hasFile('image')) {
            $imageUrl = $this->imageService->uploadImage($request->file('image'), 'stores');
        }

        Store::create([
            'name' => [
                "ar" => $request->name_ar,
                "en" => $request->name_en,
            ],
            'description' => [
                "ar" => $request->description_ar,
                "en" => $request->description_en,
            ],
            'address' => $request->address,
            'image' => $imageUrl,
            'store_type_id' => $request->store_type_id,
            'active' => $request->active ? 1 : 0,
            'order_id' => $request->order_id ?? 0,
        ]);
        return redirect()->route('dashboard.stores.index')->with('success', __('site.store_created_successfully'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $store = Store::with('storeType')->findOrFail($id);
        $storeTypes = StoreType::all();
        return view('admin.stores.show', compact('store', 'storeTypes'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $store = Store::findOrFail($id);
        $storeTypes = StoreType::all();
        return view('admin.stores.edit', compact('store', 'storeTypes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreRequest $request, string $id)
    {
        $imgUrl = "";
        $store = Store::findOrFail($id);
        if ($request->hasFile('image')) {
            if ($store->image) {
                $this->imageService->deleteImage($store->image);
            }
            $imgUrl = $this->imageService->uploadImage($request->file('image'), 'stores');
        }
        $store->update([
            'name' => [
                "ar" => $request->name_ar,
                "en" => $request->name_en,
            ],
            'description' => [
                "ar" => $request->description_ar,
                "en" => $request->description_en,
            ],
            'address' => $request->address,
            'image' => $imgUrl ?: $store->image,
            'store_type_id' => $request->store_type_id,
            'active' => $request->active ? 1 : 0,
            'order_id' => $request->order_id ?? 0,
        ]);
        return redirect()->route('dashboard.stores.index')->with('success', __('site.store_updated_successfully'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $store = Store::findOrFail($id);
        if ($store->image) {
            $this->imageService->deleteImage($store->image);
        }
        $store->delete();
        return redirect()->route('dashboard.stores.index')->with('success', __('site.store_deleted_successfully'));
    }
    public function restore($id)
    {
        $store = Store::withTrashed()->findOrFail($id);
        $store->restore();
        return redirect()->route('dashboard.stores.index')->with('success', __('site.store_restored_successfully'));
    }
    public function forceDelete($id)
    {
        $store = Store::withTrashed()->findOrFail($id);
        if ($store->image) {
            $this->imageService->deleteImage($store->image);
        }
        $store->forceDelete();
        return redirect()->route('dashboard.stores.index')->with('success', __('site.store_force_deleted_successfully'));
    }
    public function trashed()
    {
        $stores = Store::onlyTrashed()->paginate($this->perPage);
        return view('admin.stores.trashed', compact('stores'));
    }
    public function toggleActive($id)
    {
        $store = Store::findOrFail($id);
        $store->active = !$store->active;
        $store->save();
        return redirect()->back()->with('success', __('site.store_status_updated_successfully'));
    }
}
