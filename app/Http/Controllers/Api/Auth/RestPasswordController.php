<?php

namespace App\Http\Controllers\Api\Auth;


use App\Models\User;
use Ichtrojan\Otp\Otp;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Api\MainController;


class RestPasswordController extends MainController
{
    private $otp;
    public function __construct() {
        $this->otp=new Otp;
    }

    public function RestPassword(Request $request){
        $validator=Validator::make($request->all(),[
            'email'=>'required|email|exists:users,email',
            'password'=>'required|min:8|confirmed',
            'code'=>'required'
        ]);
        if($validator->fails()){
            return $this->sendError('error',$validator->errors(),403);
        }

        $user=User::where('email',$request->email)->first();

        if (Hash::check($request->password,$user->password)) {
            return $this->messageError(__('passwords.must_new_password_not_equal_old_password'),400);
        }

        $otp=$this->otp->validate($request->email,$request->code);

        if($otp->status==true){

            User::where('email',$request->email)->update($request->only('password'));
            return $this->messageSuccess( __('passwords.reset_password_successfully'));
        }else{
            return $this->messageError($otp->message,400);
        }
    }
}
