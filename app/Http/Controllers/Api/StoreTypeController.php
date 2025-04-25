<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Api\MainController;
use App\Http\Resources\Api\StoreCollection;
use App\Http\Resources\Api\StoreTypeResource;
use App\Models\StoreType;

class StoreTypeController extends MainController
{

    public function index()
    {
        $store_types = StoreType::withCount('stores')->get();
        return $this->sendData(StoreTypeResource::collection($store_types));
    }


    public function show($id)
    {

        $store_type = StoreType::withCount('stores')->find($id);
        if (!$store_type) {
            return $this->messageError(__('site.not_found_store_type'), 404);
        }

        $stores= $store_type->stores()->withCount(['categories','products'])->paginate(10);

        return $this->sendData([
            'store_type' => new StoreTypeResource($store_type),
            'stores' => new StoreCollection($stores),
        ]);

    }


}
