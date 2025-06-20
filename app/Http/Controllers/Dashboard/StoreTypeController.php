<?php

namespace App\Http\Controllers\dashboard;

use App\Models\StoreType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Dashboard\MainController;
use App\Http\Requests\Dashboard\StoreTypeRequest;
use App\Models\Store;

class StoreTypeController extends MainController
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        parent::__construct();
        $this->setClass('store_types');
    }
    public function index()
    {
        $storeTypes = StoreType::filter(request(), "dashboard")->paginate($this->perPage);
        return view('admin.store_type.index', compact('storeTypes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.store_type.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTypeRequest $request)
    {
        $imageUrl = $request->file('image')->store('store_types', 'public');
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

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $storeType = StoreType::findOrFail($id);
        return view('admin.store_type.edit', compact('storeType'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreTypeRequest $request, string $id)
    {
        $storeType = StoreType::findOrFail($id);
        $imageUrl = "";
        if ($request->hasFile('image')) {
            unlink("uploads/" . $storeType->image);
            $imageUrl = $request->file('image')->store('store_types', 'public');
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

    /**
     * Remove the specified resource from storage.
     */
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
            unlink( $storeType->image);
        }
        $storeType->forceDelete();
        return back();
    }
}
