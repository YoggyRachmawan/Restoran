<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\Employees;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class usersController extends Controller
{
    public function formLogin()
    {
        return view('auth.masukRestoran');
    }

    public function login(Request $request)
    {
        $validated = $request->validate([
            'email'     => 'required|email',
            'password'  => 'required',
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
            'passwordSaatIni'   => 'required',
            'password'          => 'required|confirmed|min:8'
        ], [
            'passwordSaatIni.required'  => 'Tolong masukkan password anda saat ini !',
            'password.required'         => 'Tolong masukkan password baru anda !',
            'password.confirmed'        => 'Konfirmasi password anda tidak sesuai !',
            'password.min:8'            => 'Masukkan password minimal 8 karakter !'
        ]);

        if (!Hash::check($request->passwordSaatIni, Auth::user()->password)) {
            return back()->with('gagal', 'Password anda gagal diubah !');
        } else {
            $data = Employees::where('id', Auth::user()->id);
            $data->update(['password' => Hash::make($request->password)]);
            return back()->with('berhasil', 'Password anda berhasil diubah !');
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
