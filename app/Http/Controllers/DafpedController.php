<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\admin_satgas;

class DafpedController extends Controller
{
    public function index()
    {
        $damins = admin_satgas::latest()->paginate(5);
        return view('dafpeds.index',compact('damins'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
    }
}