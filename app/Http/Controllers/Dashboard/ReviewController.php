<?php

namespace App\Http\Controllers\dashboard;

use App\Models\User;
use App\Models\Review;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Dashboard\MainController;

class ReviewController extends MainController
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        parent::__construct();
        $this->setClass('reviews');
    }
    public function index()
    {
        $reviews = Review::paginate($this->perPage);
        return view('admin.reviews.index', compact('reviews'));
    }
    public function create()
    {
        $users = User::with('orders')
            ->get();

        $products = Product::all()->mapWithKeys(fn($product) => [$product->id => $product->nameLang()])->toArray();
        return view('admin.reviews.create', compact('users', 'products'));
    }
    public function active(Review $review)
    {
        $review->active = !$review->active;
        $review->save();
        return response()->json(['success' => true]);
    }
}
