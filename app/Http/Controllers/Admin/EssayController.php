<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Essay;
use App\Models\EssayPayment;
use Illuminate\Http\Request;

class EssayController extends Controller
{
    public function home()
    {
        $data = Essay::with('payment')->paginate(20);
        foreach ($data as $d) {
            if (sizeof($d->payment) > 0) {
                $d->last = $d->payment[sizeof($d->payment) - 1];
            } else {
                $d->last = null;
            }
        }
        return view('admin.essay.home', [
            'data' => $data,
        ]);
    }

    public function changepaid(Request $request)
    {
        // dd($request);
        if (!$request->id) {
            return redirect()->route('admin.essay.home');
        }
        $payment = EssayPayment::with('essay')->find($request->id);
        if (!$payment) {
            dd("KEGAGALAN SISTEM");
        }

        $payment->status = $request->status;
        $payment->save();

        $msg = [
            "sukses mengubah status untuk",
            $payment->essay->fullname,
            "(",
            $payment->essay->email,
            ")",
        ];

        return redirect()->route('admin.essay.home')->with('success', join(" ", $msg));
    }
}
