<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AccountController extends Controller
{

    public function dashboard()
    {
        return view('account.dashboard');
    }

    public function login()
    {
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
            return redirect()->back()->with('error', 'User with email not found');
        }

        // login
        if (Auth::attempt([
            'email' => $request->email,
            'password' => $request->password
        ])) {
            return redirect()->route('account.dashboard');
        } else {
            return redirect()->back()->with('error', 'Wrong password');
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
        return redirect()->route('account.dashboard');
    }

    public function postregist(Request $request)
    {
        dd($request);
        return redirect()->route('account.dashboard');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('account.dashboard');
    }
}
