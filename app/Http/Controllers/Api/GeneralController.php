<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Essay;
use App\Models\EssayPayment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    private $filter = [2, 5, 6];
    private $nulldata = "true";
    public function c(Request $request)
    {
        if (!$this->verifyAdmin($request->header('Authorization'))) {
            return response()->json([
                'message' => 'you dont have access'
            ], 401);
        }
        $data = Essay::with('user')->get();

        $filter = $request->query('filter') ? $request->query('filter') : null;

        if ($filter) {
            $this->filter = explode(",", $filter);
        } else {
            $this->filter = [];
        }

        $this->nulldata = $request->query('nulldata') ? $request->query('nulldata') : "true";
        // dd($this->nulldata);

        $paginate = $request->query('paginate') ? (int)$request->query('paginate') : 10;

        foreach ($data as $d) {
            $d->payment = EssayPayment::where('essay_id', $d->id)->orderBy('created_at', 'desc')->first();
        }

        $data = $data->filter(function ($item) {
            if ($this->nulldata != "false") {
                if ($item->payment == null) {
                    return true;
                }
            }
            if ($item->payment) {
                if (in_array($item->payment->status, $this->filter)) {
                    return true;
                }
            }
        })->values()->paginate($paginate);

        return response()->json([
            'body' => $data,
        ], 200);
    }

    public function verifyAdmin($token)
    {
        if (Admin::where('token', $token)->where('logout', false)->first()) {
            return true;
        } else {
            return false;
        }
    }

    public function d()
    {
        $groupByDate = DB::table('essays')
            ->select(DB::raw('Date(created_at) as date, count(*) as total'))
            ->groupBy(DB::raw('Date(created_at)'))->limit(7)
            ->orderByDesc('created_at')->get();

        return response()->json([
            'body' => $groupByDate,
        ], 200);
    }

    public function checkaccount(Request $request)
    {
        if (!$request->query('email')) {
            return response()->json([
                'message' => 'email are required',
            ], 400);
        }

        $user = User::where('email', $request->query('email'))->first();

        if (!$user) {
            return response()->json([
                'message' => 'your email hasn\'t register yet',
                'code'  => 1
            ], 200);
        }

        if (!$user->usepass) {
            return response()->json([
                'message' => $user->name,
                'code'  => 2
            ], 200);
        } else {
            return response()->json([
                'message' => $user->name,
                'code'  => 3
            ], 200);
        }
    }

    public function infouser(Request $request)
    {
        if (!$this->verifyAdmin($request->header('Authorization'))) {
            return response()->json([
                'message' => 'you dont have access'
            ], 401);
        }

        if (!$request->query('email')) {
            return response()->json([
                'message' => 'email are required',
            ], 400);
        }

        $user = User::with('essay')->where('email', $request->query('email'))->first();

        if (!$user) {
            return response()->json([
                'message' => 'not found',
            ], 404);
        } else {
            return response()->json([
                'message' => 'data found',
                'body' => $user
            ], 200);
        }
    }

    public function graph(){
        // Get Data from Database
        $groupByDate = DB::table('users')
            ->select(DB::raw('Date(created_at) as date, count(*) as total'))
            ->groupBy(DB::raw('Date(created_at)'))->limit(7)
            ->orderByDesc('created_at')->get();

        // Return Data to View
        return response()->json([
            'body' => $groupByDate,
        ], 200);
    }
}
