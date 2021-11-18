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
        $usersCount = User::where('email', 'regexp', '^[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$')
            ->where('created_at', '>=', '2021-11-08 00:00:00')
            ->count();
        return view('admin.main.statistic', compact('usersCount'));
    }

    public function participant()
    {
        $data = User::where('email', 'regexp', '^[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$')
            ->where('created_at', '>=', '2021-11-08 00:00:00')
            ->orderBy('created_at', 'desc')
            ->get();
        return view('admin.main.participant', [
            'data' => $data
        ]);
    }

    public function excel()
    {
        $data = User::where('email', 'regexp', '^[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$')
            ->where('created_at', '>=', '2021-11-08 00:00:00')
            ->orderBy('created_at', 'desc')
            ->get();
        return Excel::download(new UsersExport($data), 'Pendaftar-'. date("Y-m-d-h-i-sa") .'.xlsx');
    }
}
