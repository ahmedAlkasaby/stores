<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\AddressRequest;
use App\Models\Address;
use App\Models\City;
use App\Models\Region;
use App\Models\User;
use App\Services\CheckValidateAddressService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Tymon\JWTAuth\Http\Middleware\Check;

class AddressController extends MainController
{

    protected $checkValidateAddress;

    public function __construct(CheckValidateAddressService $checkValidateAddress) {
        $this->checkValidateAddress = $checkValidateAddress;
    }

    public function index()
    {

    }




    public function store(AddressRequest $request)
    {
        $auth=Auth::guard('api')->user();
        $user=User::find($auth->id);
        $data=$request->all();
        $data['user_id']=$user->id;

        $result=$this->checkValidateAddress->CheckValidateAddress($request->city_id,$request->region_id);

        if($result !== true){
            return $this->messageError($result);
        }

        if($user->addresses->count()>0){
            $user->addresses()->where('active',1)->update(['active'=>0]);
        }
        $user->addresses()->create($data);
        return $this->messageSuccess(__('api.address_added'));
    }

    


    public function show(string $id)
    {
        $address=Address::find($id);
        if(!$address){
            return $this->messageError(__('api.address_not_found'));
        }
        return $this->sendData(new AddressResource($address));

    }


    public function destroy(string $id)
    {
        //
    }
}
