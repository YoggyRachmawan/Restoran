@extends('admin.adminRestoran')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Data Minuman</h1>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.content-header -->
        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <h5 class="card-title">Form Ubah Data Minuman</h5>
                            </div>
                            <div class="col-1 ml-auto text-right">
                                <a type="button" href="{{ route('indexDataMinuman') }}" class="btn btn-sm" title="Tutup">
                                    <i class="bi bi-x-square"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <form action="{{ route('updateDataMinuman', $item->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <h6>Foto</h6>
                                <input type="file" name="fotoMinuman"
                                    class="form-control-file @error('fotoMinuman') is-invalid @enderror">
                                @error('fotoMinuman')
                                    <small style="color: red;">{{ $message }}</small>
                                @enderror
                                <small id="emailHelp" class="form-text text-muted mb-3">Hanya format jpg, jpeg dan
                                    png.</small>
                                <div class="form-group">
                                    <h6>Nama</h6>
                                    <input type="text" name="namaMinuman"
                                        class="form-control @error('namaMinuman') is-invalid @enderror"
                                        value="{{ $item->namaMinuman }}" autocomplete="off">
                                    @error('namaMinuman')
                                        <small style="color: red;">{{ $message }}</small>
                                    @enderror
                                </div>
                                <h6>Harga</h6>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Rp</span>
                                    </div>
                                    <input type="text" name="harga"
                                        class="form-control @error('harga') is-invalid @enderror"
                                        value="{{ $item->harga }}" autocomplete="off">
                                </div>
                                @error('harga')
                                    <small style="color: red;">{{ $message }}</small>
                                @enderror
                                <small id="emailHelp" class="form-text text-muted">Hanya masukkan angka tanpa huruf dan
                                    tanda baca atau simbol.</small>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-secondary form-control">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /.main-content -->
    </div>
@endsection
