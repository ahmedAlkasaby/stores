<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Api\MainController;
use App\Http\Resources\UserResource;
use App\Models\User;
use App\Notifications\VerfyEmail;
use Ichtrojan\Otp\Otp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Validator;



class AuthController extends MainController
{



    public function check_register(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:users,email'
        ]);
        if ($validator->fails()) {
           return $this->sendError('error',$validator->errors(),403);
        }


        Notification::route('mail', $request->email)
        ->notify((new VerfyEmail($request->email))->delay(now()->addMinutes(1)));


        return $this->messageSuccess(__('auth.send_code_successfully'));
    }



    public function register(Request $request){

        $validator=Validator::make($request->all(),[
            'first_name'=>'required|string|max:255',
            'last_name'=>'required|string|max:255',
            'email'=>'required|email|unique:users|max:255|string',
            'password'=>'required|confirmed|min:8|string',
            'code'=>'required',
        ]);

        if($validator->fails()){
            return $this->sendError('error',$validator->errors(),403);
        }
        $otp=(new Otp)->validate($request->email, $request->code);


        if($otp->status==true){
            $user = User::create($request->all());
            $token = Auth::guard('api')->login($user);
        }else{
            return $this->messageError($otp->message,400);
        }

        return $this->sendData([
            'user' => new UserResource($user),
            'authorisation' => [
                'token' => $token,
                'type' => 'bearer',
            ]
        ], __('auth.register_successfully'));
    }




    public function login(Request $request){

        $validator=Validator::make($request->all(),[
            'email'=>'required|email|exists:users,email',
            'password'=>'required|min:8',
        ]);

        if($validator->fails()){
            return $this->sendError('error',$validator->errors(),403);
        }

        $credentials = $request->only('email', 'password');
        $token=Auth::guard('api')->attempt($credentials);
        if (!$token) {
            return $this->messageError('Unauthorized', 400);
        }
        $auth = Auth::guard('api')->user();

        $user=User::find($auth->id);



        return $this->sendData([
            'user' => new UserResource($user),
            'authorisation' => [
                'token' => $token,
                'type' => 'bearer',
            ]
        ], __('auth.login_successfully'));

    }



    public function logout(Request $request){
        Auth::guard('api')->logout();
        return $this->messageSuccess(__('auth.logout'));
    }
}
