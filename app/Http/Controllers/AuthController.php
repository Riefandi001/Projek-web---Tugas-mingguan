<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login', ['title' => 'Login']);
    }

    public function register()
    {
        return view('auth.register', ['title' => 'Register']);
    }

    public function storeRegister(Request $request)
    {
        session([
            'registered_user' => [
                'name' => $request->name,
                'username' => $request->username,
                'password' => $request->password
            ]
        ]);

        return redirect('/login')->with('success', 'Akun berhasil dibuat, silakan login');
    }

    public function authenticate(Request $request)
    {
        $user = session('registered_user');

        if (!$user) {
            return back()->with('error', 'Belum punya akun, silakan daftar dulu');
        }

        if (
            $request->username === $user['username'] &&
            $request->password === $user['password']
        ) {
            session(['user' => $user]);
            return redirect('/');
        }

        return back()->with('error', 'Username atau password salah');
    }

    public function logout()
    {
        session()->forget('user');
        return redirect('/login');
    }
}
