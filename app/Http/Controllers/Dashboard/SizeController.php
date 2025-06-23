<?php

namespace App\Http\Controllers\Dashboard;


use App\Http\Controllers\Dashboard\MainController;
use App\Http\Requests\Dashboard\SizeRequest;
use App\Models\Size;

class SizeController extends MainController
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        parent::__construct();
        $this->setClass('sizes');
    }
    public function index()
    {
        $sizes = Size::filter(request(), "dashboard")->paginate($this->perPage);
        return view('admin.sizes.index', compact('sizes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.sizes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SizeRequest $request)
    {
        Size::create([
            'name' => [
                "ar" => $request->name_ar,
                "en" => $request->name_en,
            ],
            'description' => [
                "ar" => $request->description_ar,
                "en" => $request->description_en,
            ],
            'active' => $request->active ?? 0,
            'order_id' => $request->order_id ?? null,
        ]);

        return redirect()->route('dashboard.sizes.index')->with('success', __('site.size_created'));
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
        $size = Size::findOrFail($id);
        return view('admin.sizes.edit', compact('size'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SizeRequest $request, string $id)
    {
        $size = Size::findOrFail($id);
        $size->update([
            'name' => [
                "ar" => $request->name_ar,
                "en" => $request->name_en,
            ],
            'description' => [
                "ar" => $request->description_ar,
                "en" => $request->description_en,
            ],
            'active' => $request->active ?? 0,
            'order_id' => $request->order_id ?? null,
        ]);

        return redirect()->route('dashboard.sizes.index')->with('success', __('site.size_updated'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if(Size::find($id)->products()->count() > 0){
            return redirect()->route('dashboard.sizes.index')->with('error', __('site.size_has_products'));
        }
        $size = Size::findOrFail($id);
        $size->delete();
        return redirect()->route('dashboard.sizes.index')->with('success', __('site.size_deleted'));
    }
    public function restore($id)
    {
        $size = Size::withTrashed()->findOrFail($id);
        $size->restore();
        return redirect()->route('dashboard.sizes.index')->with('success', __('site.size_restored'));
    }
    public function forceDelete($id)
    {
        $size = Size::withTrashed()->findOrFail($id);
        $size->forceDelete();
        return redirect()->route('dashboard.sizes.index')->with('success', __('site.size_deleted'));
    }
    public function toggleActive($id)
    {
        $size = Size::withTrashed()->where('id', $id)->first();
        $size->active = !$size->active;
        $size->save();
        return redirect()->route('dashboard.sizes.index')->with('success', __('site.size_toggled'));
    }
}
