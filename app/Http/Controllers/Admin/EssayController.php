<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EssayController extends Controller
{
    public function home()
    {
        return view('admin.essay.home');
    }

    public function changepaid(Request $request)
    {
        return 0;
    }
}
