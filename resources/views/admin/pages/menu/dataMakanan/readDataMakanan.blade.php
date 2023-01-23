@extends('admin.adminRestoran')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Data Makanan</h1>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content text-xs">
            <div class="container-fluid">
                @if ($message = Session::get('berhasil'))
                    <div class="alert alert-success" role="alert">
                        {{ $message }}
                    </div>
                @endif
                @if ($message = Session::get('ubah'))
                    <div class="alert alert-warning" role="alert">
                        {{ $message }}
                    </div>
                @endif
                @if ($message = Session::get('hapus'))
                    <div class="alert alert-danger" role="alert">
                        {{ $message }}
                    </div>
                @endif
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-6">
                                <a type="button" href="{{ route('createDataMakanan') }}" class="btn btn-sm btn-secondary">
                                    <i class="bi bi-plus-lg"></i>
                                    Tamabah Data Makanan
                                </a>
                            </div>
                            <div class="col-3 ml-auto">
                                <form action="{{ route('indexDataMakanan') }}" method="GET">
                                    <div class="input-group">
                                        <input type="search" name="search" class="form-control form-control-sm"
                                            placeholder="Mau cari apa?" autocomplete="off">
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
                                    <th>Foto</th>
                                    <th>Nama</th>
                                    <th>Harga</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $index => $item)
                                    <tr>
                                        <td class="align-middle">{{ $index + $data->firstItem() }}</td>
                                        <td class="align-middle"><img src="{{ asset('makanan/' . $item->fotoMakanan) }}"
                                                alt="Seblak Kulon" width="30"></td>
                                        <td class="align-middle">{{ $item->namaMakanan }}</td>
                                        <td class="align-middle">Rp {{ number_format($item->harga, 0, ',', '.') }}</td>
                                        <td class="align-middle">
                                            <a type="button" href="{{ route('showDataMakanan', $item->id) }}"
                                                class="btn btn-xs btn-primary mr-1" title="Detail">
                                                <i class="bi bi-eyeglasses"></i>
                                            </a>
                                            <a type="button" href="{{ route('editDataMakanan', $item->id) }}"
                                                class="btn btn-xs btn-warning mr-1" title="Ubah">
                                                <i class="bi bi-pencil"></i>
                                            </a>
                                            <button type="button" data-toggle="modal"
                                                data-target="#notifHapus{{ $item->id }}" class="btn btn-xs btn-danger"
                                                title="Hapus">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    {{-- Notif Hapus --}}
                                    <!-- Modal -->
                                    <div class="modal fade" id="notifHapus{{ $item->id }}" data-backdrop="static"
                                        data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                        aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h3 class="modal-title bi bi-houses-fill" id="staticBackdropLabel">
                                                        Restoran</h3>
                                                </div>
                                                <div class="modal-body text-center">
                                                    <h4>Apakah anda yakin mau menghapusnya ?</h4>
                                                </div>
                                                <div class="modal-footer">
                                                    <form action="{{ route('destroyDataMakanan', $item->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        <input type="hidden" name="status" value="off">
                                                        <button type="submit" class="btn btn-danger">Ya</button>
                                                    </form>
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">Tidak</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- //Notif Hapus --}}
                                @endforeach
                            </tbody>
                        </table>
                        <div class="mt-4">
                            {{ $data->links() }}
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
        <!-- /.main-content -->
    </div>
@endsection
