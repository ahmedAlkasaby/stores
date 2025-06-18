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
            'products_count' => $this->when(isset($this->products_count), $this->products_count),
            'active' => $this->active,
            'order_id' => $this->order_id,
            'parent_id'=>$this->parent_id,
            'store_id' => $this->store_id,
            'store' => new StoreResource($this->whenLoaded('store')),
            'children' => CategoryResource::collection($this->whenLoaded('children')),
        ];
    }
}
