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
                                <a type="button" href="/readDataKasir" class="btn btn-sm" title="Tutup">
                                    <i class="bi bi-x-square"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row justify-content-around mt-3 mb-3">
                            <div class="col-4">
                                <img src="img/Yoggy.jpg" class="img-fluid rounded">
                            </div>
                            <div class="col-7">
                                <p>Nama : <span class="text-bold">Yoggy</span></p>
                                <p>Tempat, Tanggal Lahir : <span class="text-bold">Prabumulih, 10-01-1997</span></p>
                                <p>Jenis Kelamin : <span class="text-bold">Laki-laki</span></p>
                                <p>Nomor Telepon : <span class="text-bold">0895801121100</span></p>
                                <p>Email : <span class="text-bold">yoggy45@gmail.com</span></p>
                                <p>Alamat : <span class="text-bold">Jl. Sukamantri 2, Kota Bandung</span></p>
                                <p>Jabatan : <span class="text-bold">Kasir</span></p>
                                <p>Tanggal Daftar : <span class="text-bold">05-01-2023</span></p>
                                <p>Tanggal Ubah : <span class="text-bold">05-01-2023</span></p>
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
