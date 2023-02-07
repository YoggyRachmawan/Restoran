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
                @if ($message = Session::get('berhasil'))
                    <div class="alert alert-success" role="alert">
                        {{ $message }}
                    </div>
                @endif
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center justify-content-around mt-3 mb-3">
                            <div class="col-4">
                                <img src="{{ asset('pegawai/' . Auth::user()->fotoPegawai) }}" class="img-fluid rounded">
                            </div>
                            <div class="col-7">
                                <p>Nama : <span class="text-bold">{{ Auth::user()->namaPegawai }}</span></p>
                                <p>Tempat, Tanggal Lahir : <span class="text-bold">{{ Auth::user()->tempatLahir }},
                                        {{ date('d-m-Y', strtotime(Auth::user()->tanggalLahir)) }}</span></p>
                                <p>Jenis Kelamin : <span class="text-bold">{{ Auth::user()->jenisKelamin }}</span></p>
                                <p>Nomor Telepon : <span class="text-bold">{{ Auth::user()->nomorTelepon }}</span></p>
                                <p>Email : <span class="text-bold">{{ Auth::user()->email }}</span></p>
                                <p>Alamat : <span class="text-bold">{{ Auth::user()->alamat }}</span></p>
                                <a type="button" href="{{ route('editProfilAdmin', Auth::user()->id) }}"
                                    class="btn btn-secondary">Ubah Data
                                    Profil</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.main-content -->
    </div>
@endsection
