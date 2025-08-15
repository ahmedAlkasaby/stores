<?php

namespace App\Http\Resources\Api\V2;

use App\Http\Resources\Api\CategoryResource;
use App\Http\Resources\Api\ProductResource;
use App\Http\Resources\Api\ServiceResource;
use App\Http\Resources\Api\SliderResource;
use App\Http\Resources\UserResource;
use App\Models\Category;
use App\Models\Product;
use App\Models\Service;
use App\Models\Setting;
use App\Models\Slider;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use App\Facades\SettingFacade as AppSettings;


class HomeCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, mixed>
     */
    public function toArray(Request $request): array
    {
        $auth = Auth::guard('api')->user();
        $user = $auth ? User::find($auth->id) : null;
    
        $generalData = Cache::remember('data_home_general', now()->addHours(2), function () {
            $setting= AppSettings::all();

            $sliders = Slider::filter()->paginate(10);
            $sliderFeature = Slider::where('feature', 1)->filter()->paginate(10);
            $categories = Category::with('children')->filter()->paginate(10);
            $services = Service::filter()->paginate(10);
    
            $data = ['categories', 'service', 'unit', 'size', 'brand', 'children'];
    
            return [
                'setting' => $setting,
                'sliders' => $sliders,
                'sliderFeature' => $sliderFeature,
                'categories' => $categories,
                'services' => $services,
                'featureProducts' => Product::with($data)->where('feature', 1)->active()->paginate(10),
                'newProducts' => Product::with($data)->where('new', 1)->active()->paginate(10),
                'specialProducts' => Product::with($data)->where('special', 1)->active()->paginate(10),
                'saleProducts' => Product::with($data)->where('sale', 1)->active()->paginate(10),
                'filterProducts' => Product::with($data)->where('filter', 1)->active()->paginate(10),
                'offerProducts' => Product::with($data)->where('offer', 1)->active()->paginate(10),
            ];
        });
    
        return [
            'products' => ProductResource::collection($this->collection),
            'meta' => [
                'current_page' => $this->currentPage(),
                'last_page' => $this->lastPage(),
                'per_page' => $this->perPage(),
                'total' => $this->total(),
            ],
            'links' => [
                'first' => $this->url(1),
                'last' => $this->url($this->lastPage()),
                'prev' => $this->previousPageUrl(),
                'next' => $this->nextPageUrl(),
            ],
    
            // User-specific info 
            'user' => $user ? new UserResource($user) : null,
            'notification_count' => $user ? $user->notificationsUnread()->count() : 0,
            'cart_total' => $user ? $user->totalPriceInCart() : 0,
    
            // From cached general data
            'min_order' => $generalData['setting']->min_order ?? null,
            'max_order' => $generalData['setting']->max_order ?? null,
            'delivery_cost' => $generalData['setting']->delivery_cost ?? null,
            'min_order_for_shipping_free' => $generalData['setting']->min_order_for_shipping_free ?? null,
            'site_title' => $generalData['setting']->site_title ?? null,
            'site_phone' => $generalData['setting']->site_phone ?? null,
            'site_email' => $generalData['setting']->site_email ?? null,
            'logo' => $generalData['setting']->logo ?? null,
            'facebook' => $generalData['setting']->facebook ?? null,
            'youtube' => $generalData['setting']->youtube ?? null,
            'whatsapp' => $generalData['setting']->whatsapp ?? null,
            'snapchat' => $generalData['setting']->snapchat ?? null,
            'instagram' => $generalData['setting']->instagram ?? null,
            'twitter' => $generalData['setting']->twitter ?? null,
            'tiktok' => $generalData['setting']->tiktok ?? null,
            'telegram' => $generalData['setting']->telegram ?? null,
    
            'services' => ServiceResource::collection($generalData['services']),
            'sliders' => SliderResource::collection($generalData['sliders']),
            'sliderFeature' => SliderResource::collection($generalData['sliderFeature']),
            'categories' => CategoryResource::collection($generalData['categories']),
            'featureProducts' => ProductResource::collection($generalData['featureProducts']),
            'newProducts' => ProductResource::collection($generalData['newProducts']),
            'specialProducts' => ProductResource::collection($generalData['specialProducts']),
            'saleProducts' => ProductResource::collection($generalData['saleProducts']),
            'filterProducts' => ProductResource::collection($generalData['filterProducts']),
            'offerProducts' => ProductResource::collection($generalData['offerProducts']),
            'product_min' => Product::filter()->min('price'),
            'product_max' => Product::filter()->max('price'),
        ];
    }

}
