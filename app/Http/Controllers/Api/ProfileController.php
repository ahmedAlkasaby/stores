<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\Api\ChangeAddressRequest;
use App\Http\Requests\Api\ChangePasswordRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class ProfileController extends MainController
{
    public function index()
    {
        $auth=Auth()->guard('api')->user();
        $user=User::find($auth->id);
        return $this->sendData(new UserResource($user));
    }

    public function changeAddress(ChangeAddressRequest $request)
    {
        $data = $request->validated();
        $auth=Auth()->guard('api')->user();
        $address=$auth->addresses()->where('id',$data['address_id'])->first();
        if (!$address) {
            return $this->messageError(__('api.address_not_found'));
        }
        $auth->addresses()->where('active',1)->update(['active'=>0]);
        $address->update([
            'active'=>1,
        ]);

        return $this->messageSuccess(__('api.address_changed'));

    }

      public function changePassword(ChangePasswordRequest $request){

        $user=auth()->guard('api')->user();
        if(Hash::check($request->current_password, $user->password)){
            if(Hash::check($request->new_password,$user->password)){
                return $this->massageError(__('api.The old password must not match the new password'));

            }else{
                User::where('id',$user->id)->update([
                    'password'=>Hash::make($request->new_password)
                ]);
                return $this->messageSuccess(__('api.change_password_successfully'));
            }
        }else{
            return $this->massageError(__('api.current_password_not_correct'));

        }

    }
}
