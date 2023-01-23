@extends('admin.adminRestoran')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Profil Saya</h1>
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
                                <h5 class="card-title">Form Ubah Data Profil</h5>
                            </div>
                            <div class="col-1 ml-auto text-right">
                                <a type="button" href="/readProfilAdmin" class="btn btn-sm" title="Tutup">
                                    <i class="bi bi-x-square"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <form>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <h6>Foto</h6>
                                        <input type="file" class="form-control-file">
                                        <small id="emailHelp" class="form-text text-muted">Hanya format jpg, jpeg dan
                                            png.</small>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <h6>Nama Lengkap</h6>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <h6>Tempat Lahir</h6>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <h6>Tanggal Lahir</h6>
                                        <input type="date" class="form-control">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <h6>Jenis Kelamin</h6>
                                    <select class="form-control">
                                        <option></option>
                                        <option value="">Laki-laki</option>
                                        <option value="">Perempuan</option>
                                    </select>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <h6>Email</h6>
                                        <input type="email" class="form-control">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <h6>Nomor Telepon</h6>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <h6>Alamat</h6>
                                        <textarea class="form-control" rows="3"></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <h6>Jabatan</h6>
                                        <input type="text" class="form-control" value="Admin" readonly>
                                    </div>
                                </div>
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
