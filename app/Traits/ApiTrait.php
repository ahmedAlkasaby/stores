<?php

namespace App\Traits;

trait ApiTrait
{

    public function sendData($data, $message='')
    {
        return response()->json([
            'success' => true,
            'message' => $message,
            'data'    => $data,
        ], 200);
    }

    public function sendError($message='error', $errorMessages = [], $code = 404)
    {
        return response()->json([
            'success' => false,
            'message' => $message,
            'errors'  => $errorMessages,
        ], $code);
    }

    public function massageError($message ,$code=400){
        return response()->json([
            'success' => false,
            'message' => $message,
        ], $code);
    }
}
