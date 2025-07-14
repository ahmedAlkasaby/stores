<?php
namespace App\Helpers;

class ActionNotificationHelper
{
    public static function  getActions(){
        return [
            'filter'=>__('site.filter'),
            'delete'=>__('site.delete'),
        ];
    }
}
