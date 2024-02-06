<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function registerLayout(){
        return view('auth.register');
    }

    public function register(Request $request){
        $request->validate([
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:3'
        ],[
            'email.required' => 'Email tidak boleh kosong',
            'email.email' => 'Harus diisi email',
            'email.unique' => 'Email sudah dipakai!',
            'password.required' => 'Password tidak boleh kosong',
            'password.min' => 'Minimal 3 Karakter',
        ]);


       User::create([
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect('/auth/login')->with('success', 'Berhasil daftar akun!');
    }

    public function loginLayout(){
        return view('auth.login');
    }

    public function login(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:3'
        ],[
            'email.required' => 'Email tidak boleh kosong',
            'email.email' => 'Harus diisi email',
            'password.required' => 'Password tidak boleh kosong',
            'password.min' => 'Minimal 3 Karakter',
        ]);

        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($credentials)) {
            return redirect('siswa')->with('success','Berhasil Login!');
        } else {
            return redirect('auth/login')->withErrors('Email atau Password salah!');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect('auth/login')->with('success', 'Berhasil logout!');
    }
}
