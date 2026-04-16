<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if ($request->email === 'admin@example.com' && $request->password === 'password') {
            session(['logged_in' => true, 'user' => 'Admin']);
            return redirect('/dashboard')->with('success', 'Login berhasil!');
        }

        return back()->with('error', 'Email atau password salah!');
    }

    public function logout()
    {
        session()->forget(['logged_in', 'user']);
        return redirect('/login')->with('success', 'Logout berhasil!');
    }
}