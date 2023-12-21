<?php

namespace App\Http\Controllers;

use App\Models\admin_satgas;
// use App\Models\AdminSatgas;
use GuzzleHttp\Psr7\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\User as Aunthenticatable;

class AuthController extends Controller
{
    public function login()
    {
        return view('authAdmin.loginAdmin'); 
    }

    public function loginproses(Request $request)
    {
        // dd($request->all());

        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $data = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if(Auth::attempt($data)){
            // $request->session()->regenerate();
            return redirect()->intended('/damins');
        }else{
            // return redirect('/login')->with('failed!', 'Email dan Password Salah');
            return redirect()->route('login')->with('failed', 'Email dan Password Salah');

        } 
                   
    
    }

    public function register()
    {
        return view('authAdmin.registerAdmin', [       
        ]);
     }
        public function store(Request $request)
        {
            $request->validate([
                'nama' => 'required|string|max:100',
                'email' => 'required|string|max:100',
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
            

        //    return back()-> with('success', 'Register successfully');
        return redirect()->intended('login');
    }


        public function processLogout(Request $request)
        {
            Auth::logout();
            return redirect('/login');
        }
}
