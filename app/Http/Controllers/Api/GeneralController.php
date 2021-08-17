<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Essay;
use App\Models\EssayPayment;
use Illuminate\Http\Request;

class GeneralController extends Controller
{
    public function a(Request $request)
    {
        $email = $request->query('email');
        if ($email) {
            $acc = Essay::with('payment')->where('email', $email)->first();
            if (!$acc) {
                return response()->json([
                    'message'   => 'Email Not Found',
                    'code'      => 0
                ], 404);
            }
            if (sizeof($acc->payment) > 0) {
                $p =  $acc->payment[sizeof($acc->payment) - 1];
                return response()->json([
                    'message'   => 'success',
                    'code'      => $p->status,
                    'reason'      => $p->reason
                ], 200);
            } else {
                return response()->json([
                    'message'   => 'not have payment',
                    'code'      => 1,
                    'body'      => null
                ], 200);
            }
        } else {
            return response()->json([
                'message'   => 'Email required',
                'code'      => 0,
            ], 404);
        }
    }
}
