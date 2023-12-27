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
        
        $damins = admin_satgas::latest()->paginate(7);
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
        // Lakukan validasi sesuai kebutuhan
        'nama' => 'required|max:100',
        'nomorhp' => 'required|max:20',
        'alamat' => 'required|max:100',
        'jenis_kelamin' => 'required|in:Laki-Laki,Wanita',
        // ...
    ]);

    // Lakukan pembaruan pada data berdasarkan nama
    $admin_satgas = admin_satgas::where('nama', $nama)->first();
    if ($admin_satgas) {
        $admin_satgas->nama = $request->input('nama');
        $admin_satgas->nomorhp = $request->input('nomorhp');
        $admin_satgas->alamat = $request->input('alamat');
        $admin_satgas->jenis_kelamin = $request->input('jenis_kelamin');
        // ...
        $admin_satgas->save();

        return redirect()->route('damins.index')
            ->with('success', 'Data berhasil diperbarui.');
    }

}



    public function destroy($nama)
    {
        admin_satgas::where('nama', $nama)->delete();

        return redirect()->route('damins.index')
            ->with('success', 'Data berhasil dihapus.');
    }
}



