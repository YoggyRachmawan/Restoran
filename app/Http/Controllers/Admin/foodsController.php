<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Foods;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class foodsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->has('search')) {
            $list = Foods::where('namaMakanan', 'LIKE', '%' . $request->search . '%')->where('status', 'on')->orderBy('updated_at', 'DESC')->paginate(3);
        } else {
            $list = Foods::where('status', 'on')->orderBy('updated_at', 'DESC')->paginate(3);
        }
        return view('admin.pages.menu.dataMakanan.readDataMakanan', ['data' => $list]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.menu.dataMakanan.createDataMakanan');
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
            'namaMakanan'   => 'required',
            'fotoMakanan'   => 'required|image',
            'harga'         => 'required|numeric',
            'status'        => 'required'
        ], [
            'namaMakanan.required'  => 'Nama makanan harus diisi !',
            'fotoMakanan.required'  => 'Foto makanan harus ada !',
            'fotoMakanan.image'     => 'Format foto makanan hanya jpg, jpeg dan png !',
            'harga.required'        => 'Harga makanan harus diisi !',
            'harga.numeric'         => 'Hanya masukkan angka tanpa huruf dan tanda baca atau simbol !'
        ]);

        $data = Foods::create($validated);

        if ($request->hasFile('fotoMakanan')) {
            $request->file('fotoMakanan')->move('makanan/', $request->file('fotoMakanan')->getClientOriginalName());
            $data->fotoMakanan = $request->file('fotoMakanan')->getClientOriginalName();
            $data->save();
        }

        return redirect()->route('indexDataMakanan')->with('berhasil', '1 data makanan berhasil ditambahkan !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Foods::find($id);
        return view('admin.pages.menu.dataMakanan.showDataMakanan', ['item' => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Foods::find($id);
        return view('admin.pages.menu.dataMakanan.updateDataMakanan', ['item' => $data]);
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
            'namaMakanan'   => 'required',
            'fotoMakanan'   => 'image',
            'harga'         => 'required|numeric'
        ], [
            'namaMakanan.required'  => 'Nama makanan harus diisi !',
            'fotoMakanan.image'     => 'Format foto makanan hanya jpg, jpeg dan png !',
            'harga.required'        => 'Harga makanan harus diisi !',
            'harga.numeric'         => 'Hanya masukkan angka tanpa huruf dan tanda baca atau simbol !'
        ]);

        $data = Foods::find($id);
        $data->update($validated);

        if ($request->hasFile('fotoMakanan')) {
            $request->file('fotoMakanan')->move('makanan/', $request->file('fotoMakanan')->getClientOriginalName());
            $data->fotoMakanan = $request->file('fotoMakanan')->getClientOriginalName();
            $data->save();
        }

        return redirect()->route('indexDataMakanan')->with('ubah', '1 data makanan berhasil diubah !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $data = Foods::find($id);
        $data->update([
            'status' => $request->status
        ]);

        return back()->with('hapus', '1 data makanan berhasil dihapus !');
    }
}
