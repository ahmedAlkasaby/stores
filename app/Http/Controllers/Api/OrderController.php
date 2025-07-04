<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\OrderRequest;
use Illuminate\Http\Request;

class OrderController extends MainController
{

    public function index()
    {

    }


    public function store(OrderRequest $request)
    {
       $data = $request->validated();
       
    }


    public function show(string $id)
    {

    }




}
