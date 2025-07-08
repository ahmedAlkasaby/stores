<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Dashboard\MainController;
use App\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\dashboard\SettingRequest;
use App\Services\SettingsService;

class SettingController extends MainController
{
    protected $imageService;
    public function __construct(SettingsService $imageService)
    {
        parent::__construct();
        $this->setClass('settings');
        $this->imageService = $imageService;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $setting = Setting::find(1);
        return view('admin.settings.index', compact('setting'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id) {}

    /**
     * Update the specified resource in storage.
     */
    public function update(SettingRequest $request, string $id)
    {
        $setting = Setting::findOrFail(1);
        $logoPath = $setting->logo;
        if ($request->hasFile('logo')) {
            $logoPath = $this->imageService->updateImage($request->file('logo'), $setting->logo, 'settings');
        }

        $data = $request->except('logo');
        $data['logo'] = $logoPath;

        $setting->update($data);

        return redirect()->route('dashboard.settings.show', 1)->with('success', __('site.updated_successfully'));
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
