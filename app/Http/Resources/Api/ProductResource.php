<?php

namespace App\Http\Resources\Api;

use App\Http\Resources\Api\UnitResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->nameLang(),
            'description' => $this->descriptionLang(),
            'image' => url($this->image),

            'price_start'=>$this->children->min('price'),
            'price_end'=>$this->children->max('price'),
            'price' => $this->price,

            'order_limit' => $this->order_limit,
            'max_order'=> $this->max_order,
            'stock_amount' => $this->stock_amount,
            'max_amount' => $this->max_amount,


            'active' => $this->active,
            'feature' => $this->feature,


            'date_start' => $this->date_start,
            'date_expire' => $this->date_expire,
            'day_start' => $this->day_start,
            'day_end' => $this->day_end,
            'store_id' => $this->store_id,
            'unit_id' => $this->unit_id,
            'brand_id' => $this->brand_id,
            'size_id' => $this->size_id,
            'parent_id' => $this->parent_id,
            'order_id' => $this->order_id,
            'in_wishlists'=> $this->checkProductInWishlists(),
            'in_cart'=> $this->checkProductInCart(),
            'id_in_cart'=> $this->productIdInCart(),
            'count_in_cart'=> $this->countInCart(),
            'created_at' => $this->created_at->format('Y-m-d H:i:s'),
            'children' => ProductResource::collection($this->whenLoaded('children')),
            'unit' => new UnitResource($this->whenLoaded('unit')),
            'brand' => $this->whenLoaded('brand'),
            'size' => new SizeResource($this->whenLoaded('size')),
            'store' => new StoreResource($this->whenLoaded('store')),
            'categories' => CategoryResource::collection($this->whenLoaded('categories')),
            'store_type' => new StoreTypeResource($this->whenLoaded('storeType')),

        ];
    }
}
