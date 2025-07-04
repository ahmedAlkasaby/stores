<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\AddressRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AddressController extends MainController
{

    public function index()
    {
        //
    }


    public function store(AddressRequest $request)
    {
        $auth=Auth::guard('api')->user();
        $user=User::find($auth->id);
        $data=$request->all();
        $data['user_id']=$user->id;

        if($user->addresses->count()>0){
            $user->addresses()->where('active',1)->update(['active'=>0]);
        }
        $user->addresses()->create($data);
        return $this->messageSuccess(__('api.address_added'));
    }


    public function show(string $id)
    {
        //
    }


    public function destroy(string $id)
    {
        //
    }
}
