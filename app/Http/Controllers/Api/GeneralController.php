<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GeneralController extends Controller
{
    public function a(Request $request)
    {
        return response()->json([
            'message' => 'success'
        ], 200);
    }
}
