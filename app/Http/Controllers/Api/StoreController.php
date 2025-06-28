<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\StoreRequest;
use App\Http\Resources\Api\StoreCollection;
use App\Http\Resources\Api\StoreResource;
use App\Models\Store;
use Illuminate\Http\Request;

class StoreController extends MainController
{

    public function index(StoreRequest $request)
    {
        $stores=Store::with('storeType')->withCount(['categories','products'])->filter($request)->paginate($this->perPage);
        return $this->sendData(new StoreCollection($stores));
    }


    public function show(string $id)
    {
        $store=Store::withCount(['categories','products'])->find($id);
        if (!$store) {
            return $this->messageError(__('site.not_found_store'), 404);
        }
        return $this->sendData(new StoreResource($store));
    }



}
