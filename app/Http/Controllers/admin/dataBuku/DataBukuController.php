<?php

namespace App\Http\Controllers\admin\dataBuku;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DataBukuController extends Controller
{
    public function showDataBuku() {
        return view('admin.dataBuku.dataBuku');
    }
}
