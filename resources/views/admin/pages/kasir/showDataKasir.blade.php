@extends('admin.adminRestoran')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Data Kasir</h1>
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
                                <h5 class="card-title">Detail Data Kasir</h5>
                            </div>
                            <div class="col-1 ml-auto text-right">
                                <a type="button" href="{{ route('indexDataKasir') }}" class="btn btn-sm" title="Tutup">
                                    <i class="bi bi-x-square"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row justify-content-around mt-3 mb-3">
                            <div class="col-4">
                                <img src="{{ asset('Pegawai/' . $data->fotoPegawai) }}" class="img-fluid rounded">
                            </div>
                            <div class="col-7">
                                <p>Nama : <span class="text-bold">{{ $data->namaPegawai }}</span></p>
                                <p>Tempat, Tanggal Lahir : <span class="text-bold">{{ $data->tempatLahir }},
                                        {{ date('d-m-Y', strtotime($data->tanggalLahir)) }}</span></p>
                                <p>Jenis Kelamin : <span class="text-bold">{{ $data->jenisKelamin }}</span></p>
                                <p>Nomor Telepon : <span class="text-bold">{{ $data->nomorTelepon }}</span></p>
                                <p>Email : <span class="text-bold">{{ $data->email }}</span></p>
                                <p>Alamat : <span class="text-bold">{{ $data->alamat }}</span></p>
                                <p>Tanggal Daftar : <span class="text-bold">{{ $data->created_at->format('d-m-Y') }}</span>
                                </p>
                                <p>Tanggal Ubah : <span class="text-bold">{{ $data->updated_at->format('d-m-Y') }}</span>
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
