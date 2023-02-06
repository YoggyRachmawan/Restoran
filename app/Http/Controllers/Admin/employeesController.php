<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Admin\Employees;
use App\Http\Controllers\Controller;
use Illuminate\Support\Carbon;
use Illuminate\Validation\Rules\Password;

class employeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->has('search')) {
            $list = Employees::select('employees.id', 'jabatan', 'fotoPegawai', 'namaPegawai', 'tempatLahir', 'tanggalLahir', 'jenisKelamin', 'nomorTelepon', 'email', 'alamat', 'status')
                ->join('positions', 'employees.FK_Jabatan', '=', 'positions.id')
                ->where('namaPegawai', 'LIKE', '%' . $request->search . '%')
                ->orderBy('employees.updated_at', 'DESC')
                ->paginate(3);
        } else {
            $list = Employees::select('employees.id', 'jabatan', 'fotoPegawai', 'namaPegawai', 'tempatLahir', 'tanggalLahir', 'jenisKelamin', 'nomorTelepon', 'email', 'alamat', 'status')
                ->join('positions', 'employees.FK_Jabatan', '=', 'positions.id')
                ->orderBy('employees.updated_at', 'DESC')
                ->paginate(3);
        }
        return view('admin.pages.Kasir.readDataKasir', ['data' => $list]);
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
            'FK_Jabatan'    => 'required',
            'fotoPegawai'   => 'required|image',
            'namaPegawai'   => 'required',
            'tempatLahir'   => 'required',
            'tanggalLahir'  => 'required|date',
            'jenisKelamin'  => 'required',
            'nomorTelepon'  => 'required',
            'email'         => 'required',
            'alamat'        => 'required',
            'password'      => 'required|confirmed', Password::min(3),
            'status'        => 'required'
        ]);

        $data = Employees::create([
            'FK_Jabatan'    => $request->FK_Jabatan,
            'namaPegawai'   => $request->namaPegawai,
            'tempatLahir'   => $request->tempatLahir,
            'tanggalLahir'  => Carbon::parse($request->tanggalLahir)->format('Y-m-d'),
            'jenisKelamin'  => $request->jenisKelamin,
            'nomorTelepon'  => $request->nomorTelepon,
            'alamat'        => $request->alamat,
            'email'         => $request->email,
            'password'      => bcrypt($request->password),
            'status'        => $request->status
        ]);

        if ($request->hasFile('fotoPegawai')) {
            $request->file('fotoPegawai')->move('pegawai/', $request->file('fotoPegawai')->getClientOriginalName());
            $data->fotoPegawai = $request->file('fotoPegawai')->getClientOriginalName();
            $data->save();
        }

        return redirect()->route('indexDataKasir');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show()
    {
        return view('admin.pages.Kasir.showDataKasir');
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
    public function destroy(Request $request, $id)
    {
        $data = Employees::find($id);
        $data->update([
            'status' => $request->status
        ]);
        return back();
    }
}
