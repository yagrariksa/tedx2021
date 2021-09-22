<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Speaker;
use App\Models\User;
use Illuminate\Http\Request;

class SpeakerController extends Controller
{
    public function home()
    {
        return view('admin.speaker.home');
    }

    public function participant()
    {
        $data = Speaker::with('user')->get();
        return view('admin.speaker.participant', [
            'data' => $data
        ]);
    }

    public function loloskan(Request $request)
    {
        $u = User::where('email',$request->email)->first();
        if (!$u) {
            return redirect()->back()->with('erri','something wrong');
        }

        $s = Speaker::where('uid',$u->id)->first()->update([
            'lolos' => true,
        ]);
        return redirect()->route('admin.speaker.participant');
    }
}
