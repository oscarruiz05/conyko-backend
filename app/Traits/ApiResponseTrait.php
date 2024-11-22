<?php

namespace App\Traits;

use Illuminate\Http\Response;

trait ApiResponseTrait {

    public function successResponse($data, $message = null, $code = Response::HTTP_OK) {
        return response()->json([
            'status' => 'success',
            'message' => $message,
            'data' => $data
        ], $code);
    }

    public function errorResponse($error, $message = 'Ocurrio un error', $code = Response::HTTP_INTERNAL_SERVER_ERROR) {
        return response()->json([
            'status' => 'error',
            'message' => $message,
            'error' => $error
        ], $code);
    }
}
