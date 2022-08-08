<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index', [
            'title' => 'Login'
        ]);
    }

    public function login(Request $request)
    {
        $login = $request->validate([
            'email' => 'required|max:255',
            'password' => 'required|max:255'
        ]);

        if (Auth::attempt($login)) {
            $request->session()->regenerate();
            return redirect()->intended('/');
        }

        return back()->with('loginError', 'Login Gagal');
    }

    public function logout()
    {
        Auth::logout('id', auth()->user()->id);
        return redirect('/login');
    }
}
