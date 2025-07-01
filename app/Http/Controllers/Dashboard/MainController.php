<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;


class MainController extends Controller
{
    protected $class;
    protected $perPage;
    protected $result;

    public function __construct()
    {
        $setting=Setting::where('active',1)->first();

        $this->result=$setting->result;
        $this->perPage = request()->get('per_page', $this->result);
        if ($this->perPage > 250) {
            $this->perPage = 250;
        }
    }


    protected function setClass($class)
    {
        $this->class = $class;
        View::share('class', $class); // عشان يكون متاح في كل الـ views
    }

}
