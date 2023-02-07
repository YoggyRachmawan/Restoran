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
                                <a type="button" href="{{ route('indexProfilAdmin') }}" class="btn btn-sm" title="Tutup">
                                    <i class="bi bi-x-square"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <form action="{{ route('updateProfilAdmin', $data->id) }}" method="POST" enctype="multipart/form-data">
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
                                            name="namaPegawai" value="{{ $data->namaPegawai }}">
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
                                            name="tempatLahir" value="{{ $data->tempatLahir }}">
                                        @error('tempatLahir')
                                            <small style="color: red;">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <h6>Tanggal Lahir</h6>
                                        <input type="text"
                                            class="form-control @error('tanggalLahir') is-invalid @enderror"
                                            name="tanggalLahir" id="datepicker"
                                            value="{{ date('d-m-Y', strtotime($data->tanggalLahir)) }}">
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
                                            {{ $data->jenisKelamin == 'Laki-laki' ? 'selected' : '' }}>Laki-laki
                                        </option>
                                        <option value="Perempuan"
                                            {{ $data->jenisKelamin == 'Perempuan' ? 'selected' : '' }}>Perempuan
                                        </option>
                                    </select>
                                    @error('jenisKelamin')
                                        <small style="color: red;">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <h6>Email</h6>
                                        <input type="email" class="form-control @error('email') is-invalid @enderror"
                                            name="email" value="{{ $data->email }}">
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
                                            name="nomorTelepon" value="{{ $data->nomorTelepon }}">
                                        @error('nomorTelepon')
                                            <small style="color: red;">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <h6>Alamat</h6>
                                        <textarea class="form-control @error('alamat') is-invalid @enderror" name="alamat" rows="3">{{ $data->alamat }}</textarea>
                                        @error('alamat')
                                            <small style="color: red;">{{ $message }}</small>
                                        @enderror
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
