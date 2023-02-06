<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\Employees;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class usersController extends Controller
{
    public function formLogin()
    {
        return view('auth.masukRestoran');
    }

    public function login(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($validated)) {
            if (Auth::user()->FK_Jabatan == 1) {
                $request->session()->regenerate();
                return redirect()->intended(route('dashboard'));
            }
            if (Auth::user()->FK_Jabatan == 2) {
                $request->session()->regenerate();
                return redirect()->intended(route('indexMenuMakanan'));
            }
        }

        return back();
    }

    public function formChangePasswordAdmin()
    {
        return view('admin.pages.gantiPassword.formGantiPassword');
    }

    public function changePassword(Request $request)
    {
        $request->validate([
            'passwordSaatIni' => 'required',
            'password' => 'required|confirmed', Password::min(8),
        ]);

        if (!Hash::check($request->passwordSaatIni, Auth::user()->password)) {
            return back();
        } else {
            $data = Employees::where('id', Auth::user()->id);
            $data->update(['password' => Hash::make($request->password)]);
            return back();
        }
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
