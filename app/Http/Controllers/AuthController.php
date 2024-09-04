<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // Fungsi login untuk autentikasi
    public function login(Request $request)
    {
        // Validasi input dari form login
        $credentials = $request->validate([
            'username' => 'required|string',
            'password' => 'required',
        ]);

        // Cek kredensial dan autentikasi pengguna
        if (Auth::attempt($credentials)) {
            // Jika sukses, redirect ke halaman dashboard dengan pesan sukses
            return redirect()->intended('dashboard')->with('success', 'Login berhasil!');
        }

        // Jika gagal, kembali ke halaman login dengan pesan error
        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ])->withInput($request->except('password'));
    }

    // Fungsi logout untuk keluar dari sesi
    public function logout(Request $request)
    {
        Auth::logout();

        // Redirect ke halaman login dengan pesan logout sukses
        return redirect('/login')->with('success', 'Logout berhasil!');
    }
}
