<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PelangganController extends Controller
{
    public function list()
    {
        $pelanggans = ['Kevin', 'Amel', 'Dina'];
        return view('internals.pelanggan', ['datas' => $pelanggans]);
    }
}
