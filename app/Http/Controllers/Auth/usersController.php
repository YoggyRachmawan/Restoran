<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class usersController extends Controller
{
    public function formLogin()
    {
        return view('auth.masukRestoran');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended(route('dashboard'));
        }

        return back();
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('formMasuk');
    }

    public function formForgotPassword()
    {
        return view('auth.lupaPAsswordRestoran');
    }
}
