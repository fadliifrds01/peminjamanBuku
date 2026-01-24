<?php

namespace App\Http\Controllers\admin\anggota;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InputAnggotaController extends Controller
{
    public function showInputAnggota() {
        return view('admin.Anggota.inputAnggota');
    }
}
