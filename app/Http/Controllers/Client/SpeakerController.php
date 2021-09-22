<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Speaker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SpeakerController extends Controller
{
    public function branding()
    {
        return view('speaker');
    }

    public function dashboard()
    {
        return redirect()->route('account.dashboard');

        // return view('account.speaker');
    }

    public function register(Request $request)
    {
        Speaker::create([
            'domisili' => $request->domisili,
            'instagram' => $request->instagram,
            'drive' => $request->drive,
            'uid' => Auth::user()->id
        ]);

        return redirect()->route('account.dashboard');
    }

    public function interview()
    {
    }
}
