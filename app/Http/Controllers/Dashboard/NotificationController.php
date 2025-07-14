<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Notification;
use App\Models\User;
use Illuminate\Http\Request;

class NotificationController extends MainController
{
    public function __construct()
    {
        parent::__construct();
        $this->setClass('notifications');
    }


    public function index()
    {
        $notifications=Notification::with('user')->paginate($this->perPage);
        $users=User::get()->mapWithKeys(function ($user) {
            return [$user->id => $user->name];
        })->toArray();
        if(request('action')=='delete'){
          return  $this->deleteAll();
        }
        return view('admin.notifications.index',compact('notifications','users'));
    }

    public function deleteAll(){
        Notification::filter()->forceDelete();
        return redirect()->route('dashboard.notifications.index')->with('success', __('site.deleted_successfully'));
    }


}
