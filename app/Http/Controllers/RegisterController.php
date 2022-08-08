<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => 'Register'
        ]);
    }

    public function register(Request $request)
    {
        $regis = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email:dns',
            'password' => 'required|max:255'
        ]);

        $regis['password'] = bcrypt($regis['password']);

        User::create($regis);

        $request->session()->flash('success', 'Akun berhasil ditambahkan');

        return redirect('/login');
    }
}
