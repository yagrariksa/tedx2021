<?php

namespace App\Exports;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class UsersExport implements FromView
{
    function __construct($data) {
        $this->data = $data;
      }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        
        return view('admin.main.excel', [
            'user' => $this->data
        ]);
    }
}
