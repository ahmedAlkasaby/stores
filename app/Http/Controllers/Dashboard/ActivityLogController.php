<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\ActivityLog;
use Illuminate\Http\Request;

class ActivityLogController extends MainController
{

     public function __construct()
    {
        parent::__construct();
        $this->setClass('additions');
    }
    public function index()
    {
        $activityLogs=ActivityLog::filter()->paginate($this->perPage);

        return view('admin.activity_logs.index',compact('activityLogs'));
    }
}
