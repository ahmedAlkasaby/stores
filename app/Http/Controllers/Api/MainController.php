<?php

namespace App\Http\Controllers\Api;

use App\Models\Region;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MainController extends Controller
{
    protected $perPage ;
    public function __construct(Request $request)
    {
        $this->perPage = $request->get('per_page', 10);
        if($this->perPage > 50){
            $this->perPage = 50;
        }
    }

    public function sendData($data, $message='')
    {
        return response()->json([
            'success' => true,
            'message' => $message,
            'data'    => $data,
        ], 200);
    }
    public function messageSuccess($message ,$code=200){
        return response()->json([
            'success' => true,
            'message' => $message,
        ], $code);
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
