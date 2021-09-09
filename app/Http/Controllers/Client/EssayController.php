<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Essay;
use App\Models\EssayPayment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Validator;

class EssayController extends Controller
{
    public function branding()
    {
        // maybe give some middleware identification here
        // or maybe in view
        // return view('essay.branding');
        return view('essay');
    }

    public function dashboard()
    {
        return view('account.essay');
    }

    public function register(Request $request)
    {

        Essay::create([
            'uid'       => Auth::user()->id,
            'title'     => $request->title,
            'essaylink' => $request->essaylink,
        ]);

        // return
        return redirect()->route('account.essay.dashboard');
    }

    public function paid(Request $request)
    {
        // validate
        $rules = [
            'method' => 'required',
            'bukti'  => 'required'
        ];

        $messages = [
            'method.required'        => 'The payment method field is required',
            'bukti.required'         => 'The transfer slip field is required',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($request->all);
        }

        // upload file
        $nameimg = time() . "." . $request->bukti->extension();
        $request->bukti->storeAs('public', $nameimg);
        // insert data
        $a = EssayPayment::create([
            'essay_id' => Auth::user()->essay->id,
            'status' => 2,
            'img' => url('/storage' . "/" . $nameimg),
            'method' => $request->method
        ]);

        return redirect()
            ->route('account.essay.dashboard')
            ->with('success', 'Sukses mengupload pembayaran');
    }
}
