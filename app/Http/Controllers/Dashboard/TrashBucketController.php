<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\TrashBucket;
use Illuminate\Http\Request;

class TrashBucketController extends MainController
{
     public function __construct()
    {
        parent::__construct();
        $this->setClass('trash_buckets');
    }
    public function index()
    {
        $trashBuckets=TrashBucket::with(['user','model'])->filter()->paginate($this->perPage);
        return view('admin.trash_buckets.index',compact('trashBuckets'));
       
        
    }
}
