<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Essay;
use App\Models\EssayPayment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EssayController extends Controller
{
    public function home()
    {
        
        $data = Essay::with('payment')->get();
        $total = sizeof($data);
        $unpaid = sizeof(
            $data->filter(function ($item) {
                if (sizeof($item->payment) == 0) {
                    return true;
                }
            })
        );
        $waiting = sizeof(
            $data->filter(function ($item) {
                if (sizeof($item->payment) != 0) {
                    $last = sizeof($item->payment) - 1;
                    // dd($item->payment[$last]->status);
                    if ($item->payment[$last]->status == "2") {
                        return true;
                    }
                }
            })
        );
        $accepted = sizeof(
            $data->filter(function ($item) {
                if (sizeof($item->payment) != 0) {
                    $last = sizeof($item->payment) - 1;
                    if ($item->payment[$last]->status == "6") {
                        return true;
                    }
                }
            })
        );
        $declined = sizeof(
            $data->filter(function ($item) {
                if (sizeof($item->payment) != 0) {
                    $last = sizeof($item->payment) - 1;
                    if ($item->payment[$last]->status == "5") {
                        return true;
                    }
                }
            })
        );
        return view('admin.essay.home', [
            'total' => $total,
            'unpaid' => $unpaid,
            'waiting' => $waiting,
            'accepted' => $accepted,
            'declined' => $declined,
        ]);
    }

    public function payment()
    {
        return view('admin.essay.payment',);
    }

    public function changepaid(Request $request)
    {
        // dd($request);
        if (!$request->id) {
            return redirect()->route('admin.essay.payment');
        }
        $payment = EssayPayment::with('essay', 'essay.user')->find($request->id);
        if (!$payment) {
            dd("KEGAGALAN SISTEM");
        }

        $payment->status = $request->status;
        $payment->reason = $request->reason;
        $payment->save();

        $msg = [
            "sukses mengubah status untuk",
            $payment->essay->user->name,
            "(",
            $payment->essay->user->email,
            ")",
        ];

        return redirect()->route('admin.essay.payment')->with('success', join(" ", $msg));
    }

    public function finalist()
    {
        $data = Essay::with(['user', 'payment'])->paginate(20);
        foreach ($data as $d) {
            if (sizeof($d->payment) > 0) {
                $d->last = $d->payment[sizeof($d->payment) - 1];
            } else {
                $d->last = null;
            }
        }
        return view('admin.essay.finalist', [
            'data' => $data,
        ]);
    }
}
