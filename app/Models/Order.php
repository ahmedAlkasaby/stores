<?php

namespace App\Models;

use App\Enums\StatusOrderEnum;
use Illuminate\Support\Facades\Auth;



class Order extends MainModel
{

    protected $fillable = [
        'user_id',
        'address_id',
        'status',
        'payment_id',
        'delivery_time_id',
        'delivery_id',
        'shipping_address',
        'price',
        'discount',
        'shipping_products',
        'notes',
    ];

    protected $casts = [
        'status' => StatusOrderEnum::class,
    ];





    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function address()
    {
        return $this->belongsTo(Address::class);
    }

    public function delivery()
    {
        return $this->belongsTo(User::class, 'delivery_id', 'id');
    }

    public function deliveryTime()
    {
        return $this->belongsTo(DeliveryTime::class, 'delivery_time_id', 'id');
    }



    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }

    public function payment()
    {
        return $this->belongsTo(Payment::class, 'payment_id', 'id');
    }

    public function orderItems()
    {
        return $this->hasMany(OrderItem::class, 'order_id', 'id');
    }



    

    public function shipping(){
        return $this->shipping_address+$this->shipping_products;
    }
  
    
    public function orderTotal(){
        return $this->price - $this->discount + $this->shipping();
    }
    public function scopeApplySorting($query, $request)
    {
        $query->orderBy('id', 'desc');
        if ($request->filled('sort_by')) {
            switch ($request->sort_by) {
                case 'latest':
                    $query->orderByDesc('id');
                    break;
                case 'oldest':
                    $query->orderBy('id', 'asc');
                    break;   
            }
        }
        return $query;
    }
    public function scopeApplyDeliveryTime($query, $request)
    {
        if ($request->has('delivery_time') && $request->delivery_time != "all") {
            $query->where('delivery_time_id', $request->delivery_time);
        }
    }
    public function scopeApplyPayment($query, $request)
    {
        if ($request->has('payment') && $request->payment != "all") {
            $query->where('payment_id', $request->payment);
        }
    }
    public function scopeApplyDelivery($query, $request)
    {
        if ($request->has('delivery') && $request->delivery != "all") {
            $query->where('delivery_id', $request->delivery);
        }
    }
    public function scopeApplyCity($query, $request)
    {
        if ($request->has('city_id') && $request->city_id != "all") {
            $query->where('city_id', $request->city_id);
        }
    }
    public function scopeApplyRegion($query, $request)
    {
        if ($request->has('region_id') && $request->region_id != "all") {
            $query->where('region_id', $request->region_id);
        }
    }
    public function scopeApplyStatus($query, $request)
    {
        if ($request->has('status') && $request->status != "all") {
            $query->where('status', $request->status);
        }
    }
    public function scopeApplyDateFilters($query, $request)
    {
        if ($request->filled('date_start')) {
            $query->where('created_at', '>=', $request->date_start);
        }

        if ($request->filled('date_end')) {
            $query->where('created_at', '<=', $request->date_end);
        }

        return $query;
    }
    public function scopeApplyPriceFilters($query, $request)
    {
        $orders = Order::with('orderItems')->get();

        $filtered = $orders->filter(function ($order) use ($request) {
            $total = $order->orderPrice() + $order->orderShippingProducts() - $order->orderDiscount();

            if ($request->filled('min_price') && $total < $request->min_price) return false;
            if ($request->filled('max_price') && $total > $request->max_price) return false;

            return true;
        });

        return $query->whereIn('id', $filtered->pluck('id'));
    }
    public function scopeFilter($query, $request = null)
    {

        $request = $request ?? request();
        return $query
            ->applySorting($request)
            ->applyDeliveryTime($request)
            ->applyPayment($request)
            ->applyDelivery($request)
            // ->applyCity($request)
            // ->applyRegion($request)
            ->applyStatus($request)

            // ->applyDateFilters($request)
            // ->applyPriceFilters($request)
        ;
    }
}
