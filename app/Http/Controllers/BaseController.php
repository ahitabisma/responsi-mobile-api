<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function sendResponse($code, bool $status, $data)
    {
        return response()->json([
            'code' => $code,
            'status' => $status,
            'data' => $data
        ]);
    }
}
