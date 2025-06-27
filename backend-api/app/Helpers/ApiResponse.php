<?php

namespace App\Helpers;

class ApiResponse
{
    public static function success($message, $data = [], $code = 200)
    {
        return response()->json([
            'status' => true,
            'message' => $message,
            'timestamp' => now(),
            'ip' => request()->ip(),
            'data' => $data
        ], $code);
    }

    public static function error($message, $errors = [], $code = 400)
    {
        return response()->json([
            'status' => false,
            'message' => $message,
            'timestamp' => now(),
            'ip' => request()->ip(),
            'errors' => $errors
        ], $code);
    }
}
