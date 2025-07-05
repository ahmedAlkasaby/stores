<?php

namespace App\Http\Resources\Api;

use App\Http\Resources\UserResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class OrderResource extends JsonResource
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
            'user_id' => $this->user_id,
            'payment_id' => $this->payment_id,
            'delivery_time_id' => $this->delivery_time_id,
            'delivery_id' => $this->delivery_id,
            'shipping_address' => $this->shipping_address,
            'notes' => $this->notes,
            'status' => $this->status,
            'price'=>$this->orderPrice(),
            'discount'=>$this->orderDiscount(),
            'shipping_address'=>$this->getShippingAddress(),
            'order_shipping_products'=>$this->orderShippingProducts(),
            'shipping'=>$this->orderShippingProducts()+$this->getShippingAddress(),

            'created_at' => $this->created_at->format('Y-m-d H:i:s'),
            'updated_at' => $this->updated_at->format('Y-m-d H:i:s'),
            'order_items' => OrderItemResource::collection($this->whenLoaded('orderItems')),
            'user' => new UserResource($this->whenLoaded('user')),
            'payment' => new PaymentResource($this->whenLoaded('payment')),
            'delivery_time' => new DeliveryTimeResource($this->whenLoaded('deliveryTime')),
            'delivery' => new UserResource($this->whenLoaded('delivery')),
        ];
    }
}
