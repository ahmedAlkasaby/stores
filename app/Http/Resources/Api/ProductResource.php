<?php

namespace App\Http\Resources\Api;

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
            'price' => $this->price,
            'store' => new StoreResource($this->whenLoaded('store')),
            'category' => new CategoryResource($this->whenLoaded('category')),
            'store_type' => new StoreTypeResource($this->whenLoaded('storeType')),
            'in_wishlists'=> $this->checkProductInWishlists(),
        ];
    }
}
