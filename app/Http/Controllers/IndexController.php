<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    //
    public function index()
    {
        return view("penyintas_dashboard.index");
    }

    public function pengaduan()
    {
        return view("pengaduan.index");
    }
}
