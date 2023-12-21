<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\daftar_admin;
use App\Models\admin_satgas;
use Illuminate\Support\Facades\Hash;


class DaminController extends Controller
{
    public function index()
    {
        
        $damins = admin_satgas::latest()->paginate(5);
        return view('damins.index',compact('damins'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        
        return view('damins.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|max:100',
            'email' => 'required|max:100',
            'password' => 'required',

        ]);
        $request['password'] = Hash::make($request['password']);

    // Simpan data ke dalam database
    // Misalnya:
        // admin_satgas::create($request);

        admin_satgas::create($request->all());

        return redirect()->route('damins.index')
            ->with('success', 'Admin berhasil ditambahkan.');
    }

    public function show($nama)
    {
        $damins = admin_satgas::find($nama);
        return view('damins.show', compact('damins'));
    }

    public function edit($nama)
    {
        $damins = admin_satgas::where('nama', $nama)->first();
        return view('damins.edit', compact('damins'));
    }

    public function update(Request $request, $nama)
    {
        $request->validate([
            'nama' => 'required|max:50',
        ]);

        dio::where('nama', $nama)->update($request->only('nama'));

        return redirect()->route('damins.index')
            ->with('success', 'Data berhasil diperbarui.');
    }

    public function destroy($nama)
    {
        admin_satgas::where('nama', $nama)->delete();

        return redirect()->route('damins.index')
            ->with('success', 'Data berhasil dihapus.');
    }
}



