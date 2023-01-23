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
        <div class="content text-xs">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <h5 class="card-title">Laporan Transaksi</h5>
                            </div>
                            <div class="col-3 ml-auto">
                                <form action="simple-results.html">
                                    <div class="input-group">
                                        <input type="search" class="form-control form-control-sm"
                                            placeholder="Mau cari apa?">
                                        <div class="input-group-append">
                                            <button type="submit" class="btn btn-sm btn-secondary">
                                                <i class="fa fa-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <h6>Filter :</h6>
                        <div class="row">
                            <div class="col-6">
                                <div class="row">
                                    <div class="col-5">
                                        <div class="input-group input-group-sm mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">Dari</span>
                                            </div>
                                            <input type="date" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-5">
                                        <div class="input-group input-group-sm mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">Sampai</span>
                                            </div>
                                            <input type="date" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <button type="submit" class="btn btn-sm btn-secondary">
                                            Terapkan
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2 ml-auto">
                                <button type="submit" class="btn btn-sm btn-success form-control form-control-sm">
                                    <i class="bi bi-file-earmark-excel"></i>
                                    Export to Excel
                                </button>
                            </div>
                        </div>
                        <table class="table table-bordered table-sm text-center">
                            <thead class="bg-secondary">
                                <tr>
                                    <th>No</th>
                                    <th>ID Transaksi</th>
                                    <th>Nama Pelanggan</th>
                                    <th>Tanggal Transaksi</th>
                                    <th>Total Harga</th>
                                    <th>Kasir</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="align-middle">1</td>
                                    <td class="align-middle">RST08141</td>
                                    <td class="align-middle">Yorawan</td>
                                    <td class="align-middle">05-01-2023</td>
                                    <td class="align-middle">Rp 25.000</td>
                                    <td class="align-middle">Yoggy</td>
                                    <td class="align-middle">
                                        <a type="button" href="/showDataLaporan" class="btn btn-xs btn-primary mr-1"
                                            title="Detail">
                                            <i class="bi bi-eyeglasses"></i>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <ul class="pagination pagination-sm m-0 mt-4 float-right">
                            <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                        </ul>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
        <!-- /.main-content -->
    </div>
@endsection
