@extends('admin.adminRestoran')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Data Laporan</h1>
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
                                <h5 class="card-title">Detail Transaksi</h5>
                            </div>
                            <div class="col-1 ml-auto text-right">
                                <a type="button" href="/readDataLaporan" class="btn btn-sm" title="Tutup">
                                    <i class="bi bi-x-square"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <p>ID Transaksi : <span class="text-bold">RST08141</span></p>
                        <p>Nama Pelanggan : <span class="text-bold">Yorawan</span></p>
                        <p>Tanggal Transaksi : <span class="text-bold">05-01-2023</span></p>
                        <p>Kasir : <span class="text-bold">Yoggy</span></p>
                        <div class="row border-top border-bottom pt-2 pb-2">
                            <div class="col-4 mb-2">
                                <h5 class="text-bold">Menu</h5>
                            </div>
                            <div class="col-4">
                                <h5 class="text-bold">Porsi</h5>
                            </div>
                            <div class="col-4">
                                <h5 class="text-bold">Harga</h5>
                            </div>
                            <div class="col-4">
                                <p>Seblak Kulon</p>
                            </div>
                            <div class="col-4">
                                <p class="ml-4">1</p>
                            </div>
                            <div class="col-4">
                                <p>Rp 15.000</p>
                            </div>
                            <div class="col-4">
                                <p>Jus Jeruk</p>
                            </div>
                            <div class="col-4">
                                <p class="ml-4">1</p>
                            </div>
                            <div class="col-4">
                                <p>Rp 10.000</p>
                            </div>
                        </div>
                        <div class="row">
                            {{-- Total Harga --}}
                            <div class="col-4">
                            </div>
                            <div class="col-4 mt-3">
                                <h5 class="text-bold">Total Harga</h5>
                            </div>
                            <div class="col-4 mt-3">
                                <p>Rp 25.000</p>
                            </div>

                            {{-- Dibayar --}}
                            <div class="col-4">
                            </div>
                            <div class="col-4">
                                <h5 class="text-bold">Dibayar</h5>
                            </div>
                            <div class="col-4">
                                <p>Rp 30.000</p>
                            </div>

                            {{-- Kembalian --}}
                            <div class="col-4">
                            </div>
                            <div class="col-4">
                                <h5 class="text-bold">Kembalian</h5>
                            </div>
                            <div class="col-4">
                                <p>Rp 5.000</p>
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
