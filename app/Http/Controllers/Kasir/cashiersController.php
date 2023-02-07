<?php

namespace App\Http\Controllers\Kasir;

use App\Models\Admin\Foods;
use App\Models\Admin\Drinks;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\Admin\Employees;
use App\Http\Controllers\Controller;

class cashiersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexFoods()
    {
        $data = Foods::all();
        return view('kasir.pages.menu.menuMakanan', ['foods' => $data]);
    }
    public function indexDrinks()
    {
        $data = Drinks::all();
        return view('kasir.pages.menu.menuMinuman', ['drinks' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateProfile(Request $request, $id)
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
            'alamat.required'           => 'Tolong masukkan alamat !',
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

        return redirect()->route('indexMenuMakanan')->with('berhasil', 'Profil anda berhasil diubah !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
