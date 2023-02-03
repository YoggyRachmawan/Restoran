<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Admin\Employees;
use App\Http\Controllers\Controller;
use Illuminate\Validation\Rules\Password;

class employeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.pages.Kasir.readDataKasir');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.Kasir.createDataKasir');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)

    {
        $this->validate($request, [
            // 'FK_Jabatan' => 'required',
            // 'fotoPegawai' => 'required',
            // 'namaPegawai' => 'required',
            // 'tempatLahir' => 'required',
            // 'tanggalLahir' => 'required|date',
            // 'jenisKelamin' => 'required',
            // 'nomorTelepon' => 'required|numeric',
            // 'email' => 'required',
            // 'alamat' => 'required',
            'password' => 'required|confirmed', Password::min(8)
        ]);

        Employees::create([
            // 'FK_Jabatan' => $request->FK_Jabatan,
            // 'namaPegawai' => $request->namaPegawai,
            // 'tempatLahir' => $request->tempatLahir,
            // 'tanggalLahir' => $request->tanggalLahir,
            // 'jenisKelamin' => $request->jenisKelamin,
            // 'nomorTelepon' => $request->nomorTelepon,
            // 'alamat' => $request->alamat,
            'email' => $request->email,
            'password'  => bcrypt($request->password)
        ]);

        return redirect()->route('indexDataKasir');
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
    public function update(Request $request, $id)
    {
        //
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
