<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;


class MainController extends Controller
{
    protected $class;
    protected $perPage;

    public function __construct()
    {
        $this->perPage = request()->get('per_page', 10);
        if ($this->perPage > 50) {
            $this->perPage = 50;
        }
    }


    protected function setClass($class)
    {
        $this->class = $class;
        View::share('class', $class); // عشان يكون متاح في كل الـ views
    }

}
