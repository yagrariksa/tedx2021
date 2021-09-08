<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Essay;
use App\Models\EssayPayment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Validator;

class EssayController extends Controller
{
    public function branding()
    {
        // maybe give some middleware identification here
        // or maybe in view
        // return view('essay.branding');
        return view('dummy.essay');
    }

    public function form()
    {
        return view('essay.form');
    }

    public function register(Request $request)
    {
        // validate
        $request->validate([
            'fullname'  => 'required',
            'email'     => 'required',
        ]);
        // custom validate message !!!

        // validate email
        if (User::where('email', $request->email)->first()) {
            return redirect()
                ->back()
                ->with('error', 'Email sudah digunakan')
                ->withInput($request->all());
        }
        // insert data
        $u = User::create([
            'name'  => $request->fullname,
            'email'     => $request->email,
            'age'       => $request->age,
            'address'   => $request->addr,
            'institute' => $request->institute,
            'phone' => $request->phone,
        ]);

        Essay::create([
            'uid'       => $u->id,
            'title'     => $request->essay,
            'essaylink' => $request->link,
        ]);

        // return
        return redirect()->route('essay.thanks')->with([
            'email' => $request->email,
            'success' => true,
        ]);
    }

    public function thanks(Request $request)
    {
        if (Session::has('success') && Session::has('email')) {
            if (Session::get('success')) {
                return view('essay.thanks', [
                    'email' => Session::get('email')
                ]);
            }
        }

        return redirect()->route('essay.branding');
    }

    public function payment(Request $request)
    {
        if ($request->query('email') != null) {
            // cek jika sudah berhasil membayar
            // $user = Essay::where('email', $request->query('email'))->first();
            $user = User::with('essay')->where('email', $request->query('email'))->first();

            // jika belum bayar atau gagal bayar, maka tampilkan form
            return view('essay.payment', [
                'email' => $request->query('email'),
                'user' => $user,
            ]);
        }
        return redirect()->route('essay.branding');
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

        // find user
        $user = User::with('essay')->where('email', $request->email)->first();
        if (!$user) {
            dd("USER NOT FOUND");
        }

        // upload file
        $nameimg = time() . "." . $request->bukti->extension();
        $request->bukti->storeAs('public', $nameimg);
        // insert data
        $a = EssayPayment::create([
            'essay_id' => $user->essay->id,
            'status' => 2,
            'img' => url('/storage' . "/" . $nameimg),
            'method' => $request->method
        ]);

        return redirect()
            ->route('essay.status')
            ->with('success', 'Sukses mengupload pembayaran');
    }

    public function status()
    {
        return view('essay.status');
    }

    public function dashboard()
    {
        return view('account.essay');
    }
}
