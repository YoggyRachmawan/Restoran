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
                    <div class="card-body">
                        <div class="row align-items-center justify-content-around mt-3 mb-3">
                            <div class="col-4">
                                <img src="img/Yoggy.jpg" class="img-fluid rounded">
                            </div>
                            <div class="col-7">
                                <p>Nama : <span class="text-bold">Yoggy Rachmawan</span></p>
                                <p>Tempat, Tanggal Lahir : <span class="text-bold">Prabumulih, 10-01-1997</span></p>
                                <p>Jenis Kelamin : <span class="text-bold">Laki-laki</span></p>
                                <p>Nomor Telepon : <span class="text-bold">089624735217</span></p>
                                <p>Email : <span class="text-bold">yoggyrachmawan45@gmail.com</span></p>
                                <p>Alamat : <span class="text-bold">Jl. Sukamantri 2, Kota Bandung</span></p>
                                <p>Jabatan : <span class="text-bold">Admin</span></p>
                                <a type="button" href="{{ route('editProfilAdmin') }}" class="btn btn-secondary">Ubah Data
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
