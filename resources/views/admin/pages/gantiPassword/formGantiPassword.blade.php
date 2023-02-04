@extends('admin.adminRestoran')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Ganti Password</h1>
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
                                <h5 class="card-title">Form Ganti Password</h5>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <form action="{{ route('gantiPasswordAdmin') }}" method="POST">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <div class="form-group">
                                    <h6>Password Saat Ini</h6>
                                    <input type="password" class="form-control" name="passwordSaatIni">
                                </div>
                                <div class="form-group">
                                    <h6>Password Baru</h6>
                                    <input type="password" class="form-control" name="password">
                                    <small id="emailHelp" class="form-text text-muted">Password minimal 8 karakter.</small>
                                </div>
                                <div class="form-group">
                                    <h6>Konfirmasi Password Baru</h6>
                                    <input type="password" class="form-control" name="password_confirmation">
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
