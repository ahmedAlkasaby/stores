<?php

namespace App\Http\Resources\Api;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class RegionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
         return [
            'id'=>$this->id,
            'name'=>$this->nameLang(),
            'shipping'=>$this->shipping,
            'active'=>$this->active,
            'city_id'=>$this->city_id,
            'city'=>new CityResource($this->whenLoaded('city')),
        ];
    }
}
