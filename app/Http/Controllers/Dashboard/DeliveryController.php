<?php

namespace App\Http\Controllers\dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Dashboard\MainController;
use App\Http\Requests\dashboard\DeliveryTimeRequest;
use App\Models\DeliveryTime;

class DeliveryController extends MainController
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        parent::__construct();
        $this->setClass('deliveries');
    }
    public function index()
    {
        $deliveries = DeliveryTime::paginate($this->perPage);
        return view('admin.deliveries.index', compact('deliveries'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.deliveries.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DeliveryTimeRequest $request)
    {
        DeliveryTime::create($request->all());
        return redirect()->route('dashboard.deliveries.index')->with('success', __('site.delivery_created_successfully'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $delivery = DeliveryTime::findOrFail($id);
        return view('admin.deliveries.edit', compact('delivery'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $delivery = DeliveryTime::findOrFail($id);
        $delivery->update($request->all());
        return redirect()->route('dashboard.deliveries.index')->with('success', __('site.delivery_updated_successfully'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $delivery = DeliveryTime::findOrFail($id);
        $delivery->delete();
        return redirect()->route('dashboard.deliveries.index');
    }
    public function active(string $id)
    {
        $delivery = DeliveryTime::findOrFail($id);
        $delivery->active = !$delivery->active;
        $delivery->save();
        return response()->json([
            'success' => true,
            'active' => $delivery->active,
        ]);
    }
}
