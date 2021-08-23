<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Essay;
use App\Models\EssayPayment;
use App\Models\User;
use Illuminate\Http\Request;

class GeneralController extends Controller
{
    public function a(Request $request)
    {
        $email = $request->query('email');
        if ($email) {
            $acc = User::with(['essay', 'essay.payment'])->where('email', $email)->first();
            if (!$acc) {
                return response()->json([
                    'message'   => 'Email Not Found',
                    'code'      => 0
                ], 404);
            }
            if (sizeof($acc->essay->payment) > 0) {
                $p =  $acc->essay->payment[sizeof($acc->essay->payment) - 1];
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

    public function b(Request $request)
    {
        if (!$request->query('paginate')) {
            $paginate = 10;
        } else {
            $paginate = $request->query('paginate');
        }
        if (!$request->query('page')) {
            $page = 1;
        } else {
            $page = $request->query('page');
        }

        $data = User::paginate($paginate);

        return response()->json([
            'message'   => 'get 10 data',
            'page'      => $page,
            'body'      => $data
        ], 200);
    }
}
