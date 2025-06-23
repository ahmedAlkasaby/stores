<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Store;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\ImageHandlerService;
use App\Http\Requests\dashboard\CategoryRequest;

class CategoryController extends MainController
{
    /**
     * Display a listing of the resource.
     */
    protected $imageService;
    public function __construct(ImageHandlerService $imageService)
    {
        parent::__construct();
        $this->setClass('store_types');
        $this->imageService = $imageService;
    }
    public function index()
    {
        $categories = Category::with('store')->with("parent")->filter(request(), "dashboard")->paginate($this->perPage);
        $stores = Store::all();
        $allCategories = Category::all();

        return view('admin.categories.index', compact('categories', 'stores', 'allCategories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $stores = Store::all();
        $categories = Category::all();
        return view('admin.categories.create', compact('stores', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryRequest $request)
    {
        $imageUrl = "";
        if ($request->hasFile('image')) {
            $imageUrl = $this->imageService->uploadImage($request->file('image'), 'categories');
        }
        Category::create([
            "name" => [
                'ar' => $request->name_ar,
                'en' => $request->name_en,
            ],
            "description" => [
                'ar' => $request->description_ar,
                'en' => $request->description_en,
            ],
            'image' => $imageUrl,
            'parent_id' => $request->parent_id =="null" ? null : $request->parent_id,
            'store_id' => $request->store_id,
            'active' => $request->active ?? 0,
            'order_id' => $request->order_id ?? 0,
        ]);
        return redirect()->route('dashboard.categories.index')->with('success', __('site.category_created_successfully'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $category = Category::findOrFail($id);
        $stores = Store::all();
        $categories = Category::all();

        return view('admin.categories.show', compact('category', "stores" , "categories"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category = Category::findOrFail($id);
        $stores = Store::all();
        $categories = Category::all();

        return view('admin.categories.edit', compact('category', "stores" , "categories"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategoryRequest $request, string $id)
    {
        $category = Category::findOrFail($id);
        $imageUrl = "";
        if ($request->hasFile('image')) {
            $imageUrl = $this->imageService->uploadImage($request->file('image'), 'categories');
        }
        $category->update([
            "name" => [
                'ar' => $request->name_ar,
                'en' => $request->name_en,
            ],
            "description" => [
                'ar' => $request->description_ar,
                'en' => $request->description_en,
            ],
            'image' => $imageUrl,
            'parent_id' => $request->parent_id ,
            'store_id' => $request->store_id,
            'active' => $request->active ?? 0,
            'order_id' => $request->order_id ?? 0,
        ]);
        return redirect()->route('dashboard.categories.index')->with('success', __('site.category_updated_successfully'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if(Category::find($id)->products()->count() > 0){
            return redirect()->route('dashboard.categories.index')->with('error', __('site.category_has_products'));
        }
        $category = Category::findOrFail($id);
        if ($category->image) {
            $this->imageService->deleteImage($category->image);
        }
        $category->delete();
        return redirect()->route('dashboard.categories.index')->with('success', __('site.category_deleted_successfully'));
    }
    public function restore(string $id)
    {
        $category = Category::withTrashed()->findOrFail($id);
        $category->restore();
        return redirect()->route('dashboard.categories.index')->with('success', __('site.category_restored_successfully'));
    }
    public function forceDelete(string $id)
    {
        $category = Category::withTrashed()->findOrFail($id);
        if ($category->image) {
            $this->imageService->deleteImage($category->image);
        }
        $category->forceDelete();
        return redirect()->route('dashboard.categories.index')->with('success', __('site.category_force_deleted_successfully'));
    }
    public function toggleActive(string $id)
    {
        $category = Category::findOrFail($id);
        $category->active = !$category->active;
        $category->save();
        return redirect()->route('dashboard.categories.index')->with('success', __('site.category_updated_successfully'));
    }
}
