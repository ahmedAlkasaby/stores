<?php

namespace App\Observers;

use App\Models\Order;
use App\Models\StatusTrackingOrder;
use Illuminate\Support\Facades\Auth;

class OrderObserver
{
    protected function getAuthUserData()
    {
        foreach (['api', 'web'] as $guard) {
            if (Auth::guard($guard)->check()) {
                return [
                    'id'   => Auth::guard($guard)->id(),
                    'type' => $guard
                ];
            }
        }
        return ['id' => null, 'type' => null];
    }

    public function created(Order $order)
    {
        $auth = $this->getAuthUserData();

        StatusTrackingOrder::create([
            'order_id'  => $order->id,
            'status'    => $order->status,
            'user_id'   => $auth['id'],
            'type_user' => $auth['type'],
        ]);
    }

    public function updated(Order $order)
    {
        if ($order->isDirty('status')) {
            $auth = $this->getAuthUserData();

            StatusTrackingOrder::create([
                'order_id'  => $order->id,
                'status'    => $order->status,
                'user_id'   => $auth['id'],
                'type_user' => $auth['type'],
            ]);
        }
    }
}
