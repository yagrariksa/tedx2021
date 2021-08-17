<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Essay;
use App\Models\EssayPayment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class EssayController extends Controller
{
    public function branding()
    {
        return view('essay.branding');
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
        if (Essay::where('email', $request->email)->first()) {
            return redirect()
                ->back()
                ->with('error', 'Email sudah digunakan')
                ->withInput($request->all());
        }
        // insert data
        Essay::create([
            'fullname'  => $request->fullname,
            'email'     => $request->email
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

            // jika belum bayar atau gagal bayar, maka tampilkan form
            return view('essay.payment', [
                'email' => $request->query('email'),
            ]);
        }
        return redirect()->route('essay.branding');
    }

    public function paid(Request $request)
    {
        // validate
        $request->validate([
            'method' => 'required',
            'bukti'  => 'required'
        ]);

        // find user
        $user = Essay::where('email', $request->email)->first();
        if (!$user) {
            dd("USER NOT FOUND");
        }

        // upload file
        $nameimg = time() . $request->bukti->extension();
        $request->bukti->storeAs('public', $nameimg);
        // insert data
        $a = EssayPayment::create([
            'uid' => $user->id,
            'status' => 3,
            'img' => url('/storage\/' . $nameimg)
        ]);

        return redirect()
            ->route('essay.status')
            ->with('success', 'Sukses mengupload pembayaran');
    }

    public function status()
    {
        return view('essay.status');
    }
}
