<?php
namespace App\Helpers;

class OrderNotificationData{
    public static function getData($type)
    {
        switch ($type) {
            case 'new_order':
                return [
                    'title_ar' => 'طلب جديد',
                    'title_en' => 'new order',
                    'body_ar' => 'سيتم الرد على الطلب في اقرب وقت',
                    'body_en' => 'respond to your order as soon as possible',
                ];
                break;

            default:
                return [];
                break;
        }

    }

}
