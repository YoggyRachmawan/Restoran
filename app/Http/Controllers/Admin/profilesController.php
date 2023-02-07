<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\Admin\Employees;
use App\Http\Controllers\Controller;

class profilesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.pages.profil.readProfil');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Employees::find($id);
        return view('admin.pages.profil.updateProfil', ['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'fotoPegawai'   => 'image',
            'namaPegawai'   => 'required',
            'tempatLahir'   => 'required',
            'tanggalLahir'  => 'required|date',
            'jenisKelamin'  => 'required',
            'nomorTelepon'  => 'required|numeric',
            'email'         => 'required',
            'alamat'        => 'required'
        ], [
            'fotoPegawai.image'         => 'Format foto hanya jpg, jpeg dan png !',
            'namaPegawai.required'      => 'Tolong masukkan nama !',
            'tempatLahir.required'      => 'Tolong masukkan tempat lahir !',
            'tanggalLahir.required'     => 'Tolong masukkan tanggal lahir !',
            'jenisKelamin.required'     => 'Tolong pilih jenis kelamin !',
            'nomorTelepon.required'     => 'Tolong masukkan nomor telepon !',
            'nomorTelepon.numeric'      => 'Tolong hanya masukkan angka !',
            'email.required'            => 'Tolong masukkan email !',
            'alamat.required'           => 'Tolong masukkan alamat !'
        ]);

        $data = Employees::find($id);
        $data->update([
            'namaPegawai'   => $request->namaPegawai,
            'tempatLahir'   => $request->tempatLahir,
            'tanggalLahir'  => Carbon::parse($request->tanggalLahir)->format('Y-m-d'),
            'jenisKelamin'  => $request->jenisKelamin,
            'nomorTelepon'  => $request->nomorTelepon,
            'email'         => $request->email,
            'alamat'        => $request->alamat

        ]);

        if ($request->hasFile('fotoPegawai')) {
            $request->file('fotoPegawai')->move('pegawai/', $request->file('fotoPegawai')->getClientOriginalName());
            $data->fotoPegawai = $request->file('fotoPegawai')->getClientOriginalName();
            $data->save();
        }

        return redirect()->route('indexProfilAdmin')->with('berhasil', 'Profil anda berhasil diubah !');
    }
}
