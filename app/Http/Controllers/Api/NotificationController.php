<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\Api\NotificationCollection;
use App\Models\User;

class NotificationController extends MainController
{
    public function index()
    {
        $auth=Auth()->guard('api')->user();
        $user=User::find($auth->id);
        $notifications = $user->notificationsUnread()->paginate($this->perPage);
        $user->markNotificationAsRead($notifications);
        return $this->sendData(new NotificationCollection($notifications));
    }
}
