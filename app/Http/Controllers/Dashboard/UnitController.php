<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Unit;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\dashboard\UnitRequest;

class UnitController extends MainController
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        parent::__construct();
        $this->setClass('units');
    }
    public function index()
    {
        $units = Unit::filter(request(), "dashboard")->paginate($this->perPage);
        return view('admin.units.index', compact('units'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.units.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UnitRequest $request)
    {
        Unit::create([
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
        ]);

        return redirect()->route('dashboard.units.index')->with('success', __('site.unit_created_successfully'));
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
        $unit = Unit::findOrFail($id);
        return view('admin.units.edit', compact('unit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UnitRequest $request, string $id)
    {
        $unit = Unit::findOrFail($id);
        $unit->update([
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
        ]);

        return redirect()->route('dashboard.units.index')->with('success', __('site.unit_updated_successfully'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $unit = Unit::findOrFail($id);
        $unit->delete();
        return redirect()->route('dashboard.units.index')->with('success', __('site.unit_deleted_successfully'));
    }

    public function restore(string $id)
    {
        $unit = Unit::withTrashed()->findOrFail($id);
        $unit->restore();
        return redirect()->route("dashboard.units.index")->with('success', __('site.unit_restored_successfully'));
    }
    public function forceDelete(string $id)
    {
        $unit = Unit::withTrashed()->findOrFail($id);
        $unit->forceDelete();
        return redirect()->route('dashboard.units.index')->with('success', __('site.unit_force_deleted_successfully'));
    }
    public function toggleActive(string $id)
    {
        $unit = Unit::withTrashed()->where('id', $id)->first();
        $unit->active = !$unit->active;
        $unit->save();
        return redirect()->route('dashboard.units.index')->with('success', __('site.unit_toggled_successfully'));
    }
}
