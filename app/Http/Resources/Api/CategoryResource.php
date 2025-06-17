<?php

namespace App\Http\Resources\Api;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CategoryResource extends JsonResource
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
            'store' => new StoreResource($this->whenLoaded('store')),
            'products_count' => $this->when(isset($this->products_count), $this->products_count),
            'products' => new ProductCollection($this->whenLoaded('products')),
        ];
    }
}
