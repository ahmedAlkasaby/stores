<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\City;
use App\Models\Size;
use App\Models\Unit;
use App\Models\User;
use App\Models\Brand;
use App\Traits\Toggle;
use App\Models\Service;
use App\Models\Addition;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Coupon;
use App\Models\DeliveryTime;
use App\Models\Page;
use App\Models\Payment;
use App\Models\Product;
use App\Models\Region;
use App\Models\Review;
use App\Models\Slider;

class AjaxController extends Controller
{
    use Toggle;
    public function userActive(User $user)
    {
        return $this->active($user);
    }

    public function serviceActive(Service $service)
    {
        return $this->active($service);
    }

    public function sizeActive(Size $size)
    {
        return $this->active($size);
    }

    public function brandActive(Brand $brand)
    {
        return $this->active($brand);
    }

    public function unitActive(Unit $unit)
    {
        return $this->active($unit);
    }

    public function additionActive(Addition $addition)
    {
        return $this->active($addition);
    }

    public function categoryActive(Category $category)
    {
        return $this->active($category);
    }

    public function cityActive(City $city)
    {
        return $this->active($city);
    }

    public function regionActive(Region $region)
    {
        return $this->active($region);
    }

    public function deliveryTimeActive(DeliveryTime $delivery_time)
    {
        return $this->active($delivery_time);
    }

    public function pageActive(Page $page)
    {
        return $this->active($page);
    }

    public function paymentActive(Payment $payment)
    {
        return $this->active($payment);
    }

    public function sliderActive(Slider $slider)
    {
        return $this->active($slider);
    }

    public function couponActive(Coupon $coupon)
    {
        return $this->active($coupon);
    }

    public function productActive(Product $product)
    {
        return $this->active($product);
    }

    public function reviewActive(Review $review)
    {
        return $this->active($review);
    }

}
