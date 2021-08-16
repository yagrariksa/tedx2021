<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
        return 0;
    }

    public function payment()
    {
        return view('essay.payment');
    }

    public function paid(Request $request)
    {
        return 0;
    }

    public function status()
    {
        return view('essay.status');
    }
}
