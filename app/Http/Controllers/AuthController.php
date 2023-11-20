<?php

namespace App\Http\Controllers;

use App\Models\admin_satgas;
use App\Models\AdminSatgas;
use GuzzleHttp\Psr7\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register()
    {
        return view('authAdmin.registerAdmin', [
            'title' => 'Login'
            
        ]);
     }
        public function store(Request $request)
        {
            $request->validate([
                'nama' => 'required|string|max:100',
                'email' => 'required|string|email:dns|max:100|unique:admin_satgas',
                'password' => 'required|string|max:100',
            ]);

            // $data = $request->all();
            // $data['password'] = bcrypt($data['password']);
            // $user = tamu_satgas::create($data);
            // event(new Registered($user));

            
            $user = new admin_satgas();
            $user -> nama = $request->nama;
            $user -> email = $request-> email;
            $user -> password = Hash::make($request->password);
            
            $user->save();
            // dd($user);
            

           return back()-> with('success', 'Register successfully');
        }

        public function login()
        {
            return view('authAdmin.loginAdmin', [
                'title' => 'Login'
                
            ]);
        }

        public function loginproses(Request $request)
        {
            // $request->validate([
            //     'email' => 'required|email',
            //     'password' => 'required'
            // ]);
            // $checkLoginCredentials = $request->only('email','password');
            // if(Auth::attempt($checkLoginCredentials)){
            //     return redirect('login')->withSuccess('Login Berhasil');
            // }
            // return redirect('login')->withSuccess('Login Gagal');
             
            $credentials = $request->validate([
                'email' => 'required',
                'password' => 'required',
            ]);

            if(Auth::attempt($credentials)){
                $request->session()->regenerate();
                return response()->json(['message' => 'Login berhasil', 'user' => $user]);
            }else{
                return response()->json(['message' => 'Login gagal'], 401);
            }
        
        }
}
