<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Admin\Employees;
use App\Http\Controllers\Controller;
use Illuminate\Support\Carbon;

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
            $list = Employees::where('namaPegawai', 'LIKE', '%' . $request->search . '%')
                ->where('status', 'on')
                ->orderBy('employees.updated_at', 'DESC')
                ->get();
        } else {
            $list = Employees::where('status', 'on')
                ->orderBy('employees.updated_at', 'DESC')
                ->get();
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
            'nomorTelepon'  => 'required|numeric',
            'email'         => 'required',
            'alamat'        => 'required',
            'password'      => 'required|confirmed|min:8',
            'status'        => 'required'
        ], [
            'fotoPegawai.required'      => 'Tolong masukkan foto !',
            'fotoPegawai.image'         => 'Format foto hanya jpg, jpeg dan png !',
            'namaPegawai.required'      => 'Tolong masukkan nama !',
            'tempatLahir.required'      => 'Tolong masukkan tempat lahir !',
            'tanggalLahir.required'     => 'Tolong masukkan tanggal lahir !',
            'jenisKelamin.required'     => 'Tolong pilih jenis kelamin !',
            'nomorTelepon.required'     => 'Tolong masukkan nomor telepon !',
            'nomorTelepon.numeric'      => 'Tolong hanya masukkan angka !',
            'email.required'            => 'Tolong masukkan email !',
            'alamat.required'           => 'Tolong masukkan alamat !',
            'password.required'         => 'Tolong masukkan password !',
            'password.confirmed'        => 'Konfirmasi password anda tidak sesuai !',
            'password.min:8'            => 'Masukkan password minimal 8 karakter !'
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

        return redirect()->route('indexDataKasir')->with('berhasil', '1 kasir baru berhasil ditambahkan !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        $data = Employees::select('fotoPegawai', 'namaPegawai', 'tempatLahir', 'tanggalLahir', 'jenisKelamin', 'nomorTelepon', 'email', 'alamat', 'jabatan', 'employees.created_at', 'employees.updated_at')
            ->join('positions', 'employees.FK_Jabatan', '=', 'positions.id')
            ->find($id);
        return view('admin.pages.Kasir.showDataKasir', ['data' => $data]);
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
        return back()->with('hapus', '1 kasir berhasil dihapus !');
    }
}
