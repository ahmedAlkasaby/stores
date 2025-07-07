<?php

namespace App\Http\Resources\Api;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PageResource extends JsonResource
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
            'image' => $this->image,
            'active' => $this->active,
            'type' => $this->type,
            'order_id' => $this->order_id,
            'created_at' => $this->created_at->format('Y-m-d H:i:s'),
        ];
    }
}
