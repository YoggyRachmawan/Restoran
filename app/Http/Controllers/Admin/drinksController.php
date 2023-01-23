<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Drinks;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class drinksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        if ($request->has('search')) {
            $list = Drinks::where('namaMinuman', 'LIKE', '%' . $request->search . '%')->where('status', 'on')->orderBy('updated_at', 'DESC')->paginate(3);
        } else {
            $list = Drinks::where('status', 'on')->orderBy('updated_at', 'DESC')->paginate(3);
        }
        return view('admin.pages.menu.dataMinuman.readDataMinuman', ['data' => $list]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.menu.dataMinuman.createDataMinuman');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'namaMinuman'   => 'required',
            'fotoMinuman'   => 'required|image',
            'harga'         => 'required|numeric',
            'status'        => 'required'
        ], [
            'namaMinuman.required'  => 'Nama Minuman harus diisi !',
            'fotoMinuman.required'  => 'Foto Minuman harus ada !',
            'fotoMinuman.image'     => 'Format foto Minuman hanya jpg, jpeg dan png !',
            'harga.required'        => 'Harga Minuman harus diisi !',
            'harga.numeric'         => 'Hanya masukkan angka tanpa huruf dan tanda baca atau simbol !'
        ]);

        $data = Drinks::create($validated);

        if ($request->hasFile('fotoMinuman')) {
            $request->file('fotoMinuman')->move('Minuman/', $request->file('fotoMinuman')->getClientOriginalName());
            $data->fotoMinuman = $request->file('fotoMinuman')->getClientOriginalName();
            $data->save();
        }

        return redirect()->route('indexDataMinuman')->with('berhasil', '1 data Minuman berhasil ditambahkan !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Drinks::find($id);
        return view('admin.pages.menu.dataMinuman.showDataMinuman', ['item' => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Drinks::find($id);
        return view('admin.pages.menu.dataMinuman.updateDataMinuman', ['item' => $data]);
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
        $validated = $request->validate([
            'namaMinuman'   => 'required',
            'fotoMinuman'   => 'image',
            'harga'         => 'required|numeric'
        ], [
            'namaMinuman.required'  => 'Nama Minuman harus diisi !',
            'fotoMinuman.image'     => 'Format foto Minuman hanya jpg, jpeg dan png !',
            'harga.required'        => 'Harga Minuman harus diisi !',
            'harga.numeric'         => 'Hanya masukkan angka tanpa huruf dan tanda baca atau simbol !'
        ]);

        $data = Drinks::find($id);
        $data->update($validated);

        if ($request->hasFile('fotoMinuman')) {
            $request->file('fotoMinuman')->move('Minuman/', $request->file('fotoMinuman')->getClientOriginalName());
            $data->fotoMinuman = $request->file('fotoMinuman')->getClientOriginalName();
            $data->save();
        }

        return redirect()->route('indexDataMinuman')->with('ubah', '1 data Minuman berhasil diubah !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $data = Drinks::find($id);
        $data->update([
            'status' => $request->status
        ]);

        return redirect()->route('indexDataMinuman')->with('hapus', '1 data Minuman berhasil dihapus !');
    }
}
