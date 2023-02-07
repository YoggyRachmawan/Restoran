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
                                <h5 class="card-title">Form Data Kasir Baru</h5>
                            </div>
                            <div class="col-1 ml-auto text-right">
                                <a type="button" href="{{ route('indexDataKasir') }}" class="btn btn-sm" title="Tutup">
                                    <i class="bi bi-x-square"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <form action="{{ route('storeDataKasir') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <h6>Foto</h6>
                                        <input type="file" class="form-control-file" name="fotoPegawai">
                                        @error('fotoPegawai')
                                            <small style="color: red;">{{ $message }}</small>
                                        @enderror
                                        <small id="emailHelp" class="form-text text-muted">Hanya format jpg, jpeg dan
                                            png.</small>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <h6>Nama Lengkap</h6>
                                        <input type="text"
                                            class="form-control @error('namaPegawai') is-invalid @enderror"
                                            name="namaPegawai" autocomplete="off" value="{{ old('namaPegawai') }}">
                                        @error('namaPegawai')
                                            <small style="color: red;">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <h6>Tempat Lahir</h6>
                                        <input type="text"
                                            class="form-control @error('tempatLahir') is-invalid @enderror"
                                            name="tempatLahir" autocomplete="off" value="{{ old('tempatLahir') }}">
                                        @error('tempatLahir')
                                            <small style="color: red;">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <h6>Tanggal Lahir</h6>
                                        <input type="text" id="datepicker"
                                            class="form-control @error('tanggalLahir') is-invalid @enderror"
                                            name="tanggalLahir" autocomplete="off" value="{{ old('tanggalLahir') }}">
                                        @error('tanggalLahir')
                                            <small style="color: red;">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-4">
                                    <h6>Jenis Kelamin</h6>
                                    <select class="form-control @error('jenisKelamin') is-invalid @enderror"
                                        name="jenisKelamin">
                                        <option></option>
                                        <option value="Laki-laki"
                                            {{ old('jenisKelamin') == 'Laki-laki' ? 'selected' : '' }}>
                                            Laki-laki</option>
                                        <option value="Perempuan"
                                            {{ old('jenisKelamin') == 'Perempuan' ? 'selected' : '' }}>
                                            Perempuan</option>
                                    </select>
                                    @error('jenisKelamin')
                                        <small style="color: red;">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <h6>Email</h6>
                                        <input type="email"class="form-control @error('email') is-invalid @enderror"
                                            name="email" autocomplete="off" value="{{ old('email') }}">
                                        @error('email')
                                            <small style="color: red;">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <h6>Nomor Telepon</h6>
                                        <input type="text"
                                            class="form-control @error('nomorTelepon') is-invalid @enderror"
                                            name="nomorTelepon" autocomplete="off" value="{{ old('nomorTelepon') }}">
                                        @error('nomorTelepon')
                                            <small style="color: red;">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <h6>Alamat</h6>
                                        <textarea class="form-control @error('alamat') is-invalid @enderror" rows="3" name="alamat" autocomplete="off">{{ old('alamat') }}</textarea>
                                        @error('alamat')
                                            <small style="color: red;">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <h6>Jabatan</h6>
                                        <input type="hidden" value="2" name="FK_Jabatan">
                                        <input type="text" class="form-control" value="Kasir" readonly>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <h6>Password</h6>
                                        <input type="password" class="form-control @error('password') is-invalid @enderror"
                                            name="password" autocomplete="off">
                                        <small class="form-text text-muted">Password minimal 8
                                            karakter.</small>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <h6>Konfirmasi Password</h6>
                                        <input type="password"
                                            class="form-control @error('password') is-invalid @enderror"
                                            name="password_confirmation" autocomplete="off">
                                        @error('password')
                                            <small style="color: red;">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
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
