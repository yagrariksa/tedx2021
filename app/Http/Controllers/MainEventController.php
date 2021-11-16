<?php

namespace App\Http\Controllers;

use App\Exports\UsersExport;
use App\Models\User;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class MainEventController extends Controller
{
    public function statistic()
    {
        return view('admin.main.statistic');
    }

    public function participant()
    {
        $data = User::get();
        return view('admin.main.participant', [
            'data' => $data
        ]);
    }

    public function excel()
    {
        $data = User::get();

        return Excel::download(new UsersExport($data), 'Pendaftar-'. date("Y-m-d-h-i-sa") .'.xlsx');
    }
}
