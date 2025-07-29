<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Service;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\ImageHandlerService;
use App\Http\Requests\dashboard\CategoryRequest;

class CategoryController extends MainController
{

    protected $imageService;
    public function __construct(ImageHandlerService $imageService)
    {
        parent::__construct();
        $this->setClass('categories');
        $this->imageService = $imageService;
    }
    public function index()
    {
        $categories = Category::with(['service','parent'])->filter(request(), "dashboard")->paginate($this->perPage);
        $services = Service::active()->get();
        $allCategories = Category::active()->get();

        return view('admin.categories.index', compact('categories', 'services', 'allCategories'));
    }


    public function create()
    {
         $services = Service::active()->get();
        $categories = Category::active()->get();
        return view('admin.categories.create', compact('services', 'categories'));
    }


    public function store(CategoryRequest $request)
    {
        $imageUrl = $this->imageService->uploadImage('categories', $request);

        $data = $request->except('image');
        $data['image'] = $imageUrl ?? null;
        Category::create($data);
        return redirect()->route('dashboard.categories.index')->with('success', __('site.category_created_successfully'));
    }


    public function show(string $id)
    {
        $category = Category::findOrFail($id);
        $services = Service::active()->get();
        $categories = Category::active()->get();

        return view('admin.categories.show', compact('category', "services", "categories"));
    }


    public function edit(string $id)
    {
        $category = Category::findOrFail($id);
        $services = Service::active()->get();
        $categories = Category::active()->get();

        return view('admin.categories.edit', compact('category', "services", "categories"));
    }

    public function update(CategoryRequest $request, string $id)
    {
        $category = Category::findOrFail($id);
        $imageUrl = $this->imageService->editImage($request, $category, 'categories');

        $data = $request->except('image');
        $data['image'] = $imageUrl;

        $category->update($data);

        return redirect()->route('dashboard.categories.index')->with('success', __('site.category_updated_successfully'));
    }

    public function destroy(string $id)
    {
        // if (Category::find($id)->products()->count() > 0) {
        // return redirect()->route('dashboard.categories.index')->with('error', __('site.category_has_products'));
        // }
        $category = Category::findOrFail($id);
        $this->imageService->deleteImage($category->image);

        $category->delete();
        return redirect()->route('dashboard.categories.index')->with('success', __('site.category_deleted_successfully'));
    }


    public function active(Category $Category)
    {
        $Category->update([
            'active' => ! ($Category->active),
        ]);
        return response()->json([
            'success' => true,
            'active' => $Category->active,
        ]);
    }
}
