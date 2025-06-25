<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\dashboard\AdditionRequest;
use App\Models\Addition;
use App\Services\ImageHandlerService;

class AdditionController extends MainController
{
    /**
     * Display a listing of the resource.
     */
    protected $imageService;
    public function __construct(ImageHandlerService $imageService)
    {
        parent::__construct();
        $this->setClass('additions');
        $this->imageService = $imageService;
    }
    public function index()
    {
        $additions = Addition::filter(request(), "dashboard")->paginate($this->perPage);
        return view('admin.additions.index', compact('additions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.additions.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AdditionRequest $request)
    {
        $imageUrl = "";
        if ($request->type == "free") {
            $request->price = 0;
        }
        if ($request->hasFile('image')) {
            $imageUrl = $this->imageService->uploadImage($request->file('image'), 'additions');
        }

        Addition::create([
            "name" => [
                "ar" => $request->name['ar'],
                "en" => $request->name['en']
            ],
            "description" => [
                "ar" => $request->description['ar'],
                "en" => $request->description['en']
            ],
            "active" => $request->active,
            "order_id" => $request->order_id,
            "type" => $request->type,
            "price" => $request->price,
            "image" => $imageUrl,
        ]);
        return redirect()->route('dashboard.additions.index')->with('success', __('site.addition_created_successfully'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $addition = Addition::find($id);
        return view('admin.additions.show', compact('addition'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $addition = Addition::find($id);
        return view('admin.additions.edit', compact('addition'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $addition = Addition::find($id);
        $imageUrl = "";
        if ($request->type == "free") {
            $request->price = 0;
        }
        $imageUrl = $this->imageService->editImage($request, $addition);
        $addition->update([
            "name" => [
                "ar" => $request->name['ar'],
                "en" => $request->name['en']
            ],
            "description" => [
                "ar" => $request->description['ar'],
                "en" => $request->description['en']
            ],
            "active" => $request->active,
            "order_id" => $request->order_id,
            "type" => $request->type,
            "price" => $request->price,
            "image" => $imageUrl,
        ]);
        return redirect()->route('dashboard.additions.index')->with('success', __('site.addition_updated_successfully'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $addition = Addition::findOrFail($id);
        $addition->delete();
        return redirect()->route('dashboard.additions.index')->with('success', __('site.addition_deleted_successfully'));
    }
    public function toggleActive(string $id)
    {
        $addition = Addition::withTrashed()->where('id', $id)->first();
        $addition->active = !$addition->active;
        $addition->save();
        return redirect()->back()->with('success', __('site.addition_status_updated_successfully'));
    }
    public function restore($additionId)
    {
        $addition = Addition::withTrashed()->findOrFail($additionId);
        $addition->restore();
        return back()->with('success', __('site.addition_restored_successfully'));
    }
    public function forceDelete($additionId)
    {
        $addition = addition::withTrashed()->findOrFail($additionId);
        if ($addition->image) {
            $this->imageService->deleteImage($addition->image);
        }
        $addition->forceDelete();
        return back()->with('success', __('site.addition_deleted_successfully'));
    }
}
