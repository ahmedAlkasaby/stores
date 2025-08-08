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
        return $this->belongsTo(User::class);
    }

    public function deliveryTime()
    {
        return $this->belongsTo(DeliveryTime::class);
    }



    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function payment()
    {
        return $this->belongsTo(Payment::class);
    }

    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
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
        if ($request->filled('min_price')) {
            $query->where('price', '>=', $request->min_price);
        }

        if ($request->filled('max_price')) {
            $query->where('price', '<=', $request->max_price);
        }

        return $query;
    }

    public function scopeApplyAddressFilters($query, $request){
        $query->whereHas('address', function ($q) use ($request) {
            if ($request->filled('city_id')) {
                $q->where('city_id', $request->city_id);
            }
            if ($request->filled('region_id')) {
                $q->where('region_id', $request->region_id);
            }
        });
    }
    public function scopeFilter($query, $request = null)
    {

        $request = $request ?? request();
        $filters = $request->only(['user_id', 'status', 'delivery_time_id', 'payment_id', 'delivery_id']);
        return $query
            ->applySorting($request)
            ->mainApplyDynamicFilters($filters)
            // ->appllyPriceFilters($request)
            ->applyDateFilters($request)
            ->applyAddressFilters($request)
        ;
    }
}
