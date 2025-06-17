<?php

namespace App\Http\Resources\Api;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class StoreResource extends JsonResource
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
            'address' => $this->address,
            'products_count' => $this->when(isset($this->products_count), $this->products_count),
            'categories_count' => $this->when(isset($this->categories_count), $this->categories_count),
            'store_type' => new StoreTypeResource($this->whenLoaded('storeType')),
            'categories' => new CategoryCollection($this->whenLoaded('categories')),
        ];
    }
}
