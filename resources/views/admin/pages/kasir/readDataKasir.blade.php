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
        <div class="content text-xs">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-6">
                                <a type="button" href="/createDataKasir" class="btn btn-sm btn-secondary">
                                    <i class="bi bi-plus-lg"></i>
                                    Tamabah Data Kasir
                                </a>
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
                        <table class="table table-bordered table-sm text-center">
                            <thead class="bg-secondary">
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Nomor Telepon</th>
                                    <th>Jabatan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="align-middle">1</td>
                                    <td class="align-middle">Yoggy</td>
                                    <td class="align-middle">Laki-laki</td>
                                    <td class="align-middle">0895801121100</td>
                                    <td class="align-middle">Kasir</td>
                                    <td class="align-middle">
                                        <a type="button" href="/showDataKasir" class="btn btn-xs btn-primary mr-1"
                                            title="Detail">
                                            <i class="bi bi-eyeglasses"></i>
                                        </a>
                                        <button type="submit" class="btn btn-xs btn-danger" title="Hapus">
                                            <i class="bi bi-trash"></i>
                                        </button>
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
