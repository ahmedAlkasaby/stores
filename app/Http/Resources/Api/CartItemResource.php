<?php

namespace App\Http\Resources\Api;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CartItemResource extends JsonResource
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
            'product_id' => $this->product_id,
            'qty' => $this->qty,
            'product' => new ProductResource($this->whenLoaded('product')),
            'created_at' => $this->created_at->format('Y-m-d H:i:s'),
        ];
    }
}
