<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function login()
    {
        if (Session::has('admin')) {
            $admin = Session::get('admin');
            if ($admin['login']) {
                return redirect()->route('admin.home');
            }
        }
        return view('admin.login');
    }

    public function doLogin(Request $request)
    {
        if (Auth::user()) {
            Auth::logout();
        }
        // dd($request);
        if (Session::has('admin')) {
            $admin = Session::get('admin');
            if ($admin['login']) {
                return redirect()->route('admin.home');
            }
        }
        if (!$request->name) {
            return redirect()->back()->withErrors('name', 'Your Name are required');
        }
        if ($request->password != "passwordsulitbanget") {
            return redirect()->back()->with('error.password', 'Wrong Password');
        }
        $token = Str::random(20);
        Admin::create([
            'token' => $token,
            'name' => $request->name,
        ]);
        Session::put('admin', [
            'login' => true,
            'token' => $token
        ]);
        return redirect()->route('admin.home');
    }

    public function logout()
    {
        if (Session::has('admin')) {
            $admin = Session::get('admin');
            $a = Admin::where('token', $admin['token'])->first();
            $a->logout = true;
            $a->save();
            Session::put('admin', [
                'login' => false,
                'token' => null
            ]);
            return redirect()->back();
        } else {
            return redirect()->route('admin.home');
        }
    }
}
