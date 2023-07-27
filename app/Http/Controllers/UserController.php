<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        if($user = Auth::user()) {
            if($user->username == 'admin') {
                return redirect()->intended('administrator');
            }
        }
        return view('login');
    }

    public function proses(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ],
        [
            'username.required' => 'Username tidak boleh kosong',
            'password.required' => 'Password tidak boleh kosong',
        ]);
        $kredensial = $request->only('username', 'password');
        if(Auth::attempt($kredensial)) {
            $request->session()->regenerate();
            $user = Auth::user();
            if($user->username == 'admin') {
                return redirect()->intended('administrator');
            }
            return redirect()->intended('login');
        }
        return back()->withErrors(['username' => 'Username atau password salah'])->onlyInput('username');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('login');
    }
}
