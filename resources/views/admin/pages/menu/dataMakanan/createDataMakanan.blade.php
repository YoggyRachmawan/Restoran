@extends('admin.adminRestoran')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Data Makanan</h1>
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
                                <h5 class="card-title">Form Data Makanan Baru</h5>
                            </div>
                            <div class="col-1 ml-auto text-right">
                                <a type="button" href="{{ route('indexDataMakanan') }}" class="btn btn-sm" title="Tutup">
                                    <i class="bi bi-x-square"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <form action="{{ route('storeDataMakanan') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <h6>Foto</h6>
                                <input type="file" name="fotoMakanan"
                                    class="form-control-file @error('fotoMakanan') is-invalid @enderror"
                                    value="{{ old('fotoMakanan') }}">
                                @error('fotoMakanan')
                                    <small style="color: red;">{{ $message }}</small>
                                @enderror
                                <small id="emailHelp" class="form-text text-muted mb-3">Hanya format jpg, jpeg dan
                                    png.</small>
                                <div class="form-group">
                                    <h6>Nama</h6>
                                    <input type="text" name="namaMakanan"
                                        class="form-control @error('namaMakanan') is-invalid @enderror"
                                        value="{{ old('namaMakanan') }}" autocomplete="off">
                                    @error('namaMakanan')
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
                                        value="{{ old('harga') }}" autocomplete="off">
                                </div>
                                @error('harga')
                                    <small style="color: red;">{{ $message }}</small>
                                @enderror
                                <small id="emailHelp" class="form-text text-muted">Hanya masukkan angka tanpa huruf dan
                                    tanda baca atau simbol.</small>
                                <input type="hidden" name="status" value="on">
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
