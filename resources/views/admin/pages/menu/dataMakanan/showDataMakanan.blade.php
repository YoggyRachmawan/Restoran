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
                                <h5 class="card-title">Detail Data Makanan</h5>
                            </div>
                            <div class="col-1 ml-auto text-right">
                                <a type="button" href="{{ route('indexDataMakanan') }}" class="btn btn-sm" title="Tutup">
                                    <i class="bi bi-x-square"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row justify-content-around mt-3 mb-3">
                            <div class="col-4">
                                <img src="{{ asset('makanan/' . $item->fotoMakanan) }}" class="img-fluid rounded">
                            </div>
                            <div class="col-7">
                                <p>Nama : <span class="text-bold">{{ $item->namaMakanan }}</span></p>
                                <p>Harga : <span class="text-bold">Rp {{ number_format($item->harga, 0, ',', '.') }}</span>
                                </p>
                                <p>Tanggal Unggah : <span class="text-bold">{{ $item->created_at->format('d-m-Y') }}</span>
                                </p>
                                <p>Tanggal Ubah : <span class="text-bold">{{ $item->updated_at->format('d-m-Y') }}</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
        <!-- /.main-content -->
    </div>
@endsection
