<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class AccountController extends Controller
{

    public function dashboard()
    {
        return view('account.dashboard');
    }

    public function login(Request $request)
    {
        if ($request->query('page')) {
            if ($request->query('page') == 'speaker') {
                Session::put('redirect', 'speaker.branding');
            }
        }
        return view('account.login');
    }

    public function post(Request $request)
    {
        // validator
        $rules = [
            'email' => 'required',
            'password' => 'required'
        ];

        $messages = [
            'email.required' => 'Email are required',
            'password.required' => 'Password are required',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($request->all);
        }

        // find user
        $user = User::where('email', $request->email)->first();
        if (!$user) {
            return redirect()->back()->with('erri', 'Email not found');
        }

        // login
        if (Auth::attempt([
            'email' => $request->email,
            'password' => $request->password
        ])) {
            if (Session::has('redirect')) {
                $data = Session::get('redirect');
                Session::forget('redirect');
                return redirect()->route($data);
            }
            return redirect()->route('account.dashboard');
        } else {
            return redirect()->back()->with([
                'erri' => 'Incorrect password',
                'hint' => 'Please try again while remembering your password.',
                'form' => 'login',
            ])->withInput($request->all());
        }
    }

    public function postsetup(Request $request)
    {
        // dd($request);
        $user = User::where('email', $request->email)->first();
        if (!$user) {
            return redirect()->back()->with('error', 'something wrong, account not found');
        }

        $user->password = Hash::make($request->password);
        $user->usepass = true;
        $user->save();

        Auth::login($user);
        if (Session::has('redirect')) {
            $data = Session::get('redirect');
            Session::forget('redirect');
            return redirect()->route($data);
        }
        return redirect()->route('account.dashboard');
    }

    public function postregist(Request $request)
    {
        if (User::where('email', $request->email)->first()) {
            return redirect()->back()->with([
                'form' => 'regist',
                'error' => 'email has been used'
            ])->withInput($request->all());
        }
        $user = User::create([
            'name' => $request->fullname,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'usepass' => true,
            'age' => $request->age,
            'phone' => $request->phone,
            'address' => $request->address,
            'institute' => $request->institute
        ]);
        Auth::login($user);
        if (Session::has('redirect')) {
            $data = Session::get('redirect');
            Session::forget('redirect');
            return redirect()->route($data);
        }
        return redirect()->route('account.dashboard');
    }

    public function regist(Request $request)
    {
        if ($request->query('page')) {
            if ($request->query('page') == 'speaker') {
                Session::put('redirect', 'speaker.branding');
            }
        }
        return view('account.regist');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('account.dashboard');
    }
}
