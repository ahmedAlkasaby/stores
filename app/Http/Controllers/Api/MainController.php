<?php

namespace App\Http\Controllers\Api;

use App\Models\Region;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MainController extends Controller
{
    public function sendData($data, $message='')
    {
        return response()->json([
            'success' => true,
            'message' => $message,
            'data'    => $data,
        ], 200);
    }

    public function sendError($message='error', $errorMessages = [], $code = 403)
    {
        return response()->json([
            'success' => false,
            'message' => $message,
            'errors'  => $errorMessages,
        ], $code);
    }

    public function messageError($message ,$code=400){
        return response()->json([
            'success' => false,
            'message' => $message,
        ], $code);
    }



}
