<div class="content-wrapper">
    <!-- Content Header-->
    <div class="content-header">
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="card text-center">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-12 mb-3">
                                    <h5 class="bi bi-files card-title m-0"> Menu</h5>
                                </div>
                                <div class="col-12">
                                    <ul class="nav nav-tabs card-header-tabs">
                                        <li class="nav-item">
                                            <a class="nav-link {{ request()->is('MenuMakanan') ? 'active' : '' }}"
                                                href="{{ route('indexMenuMakanan') }}">
                                                <label class="bi bi-egg-fried"> Makanan</label>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link {{ request()->is('MenuMinuman') ? 'active' : '' }}"
                                                href="{{ route('indexMenuMinuman') }}">
                                                <label class="bi bi-cup-straw"> Minuman</label>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            @yield('makanan')
                            @yield('minuman')
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    {{-- <div class="card">
                        <div class="card-header">
                            <h5 class="bi bi-person-vcard card-title m-0"> Pelanggan</h5>
                        </div>
                        <div class="card-body">
                            <input class="form-control form-control-lg" type="text" placeholder="Nama Pelanggan">
                        </div>
                        <div class="card-footer">
                            <a href="#" class="btn btn-secondary form-control"><i class="bi bi-save2"></i>
                                Simpan</a>
                        </div>
                    </div> --}}
                    <div class="card">
                        <div class="card-header">
                            <h5 class="bi bi-journal-text card-title m-0"> Nota</h5>
                        </div>
                        <div class="card-body">
                            <h6><span class="text-bold">ID Transaksi :</span> RST08141</h6>
                            <h6><span class="text-bold">Tanggal Transaksi :</span> {{ date('d-m-Y') }}</h6>
                            <table class="table table-bordered mt-3 mb-3">
                                <thead class="thead-light">
                                    <tr class="text-center">
                                        <th>Menu</th>
                                        <th>Porsi</th>
                                        <th>Harga</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="align-middle">Mie Goreng Kosan</td>
                                        <td class="align-middle text-center">1</td>
                                        <td class="align-middle">Rp 10.000</td>
                                        <td class="text-center">
                                            <a href="#" class="btn" title="Hapus">
                                                <i class="bi bi-x-circle"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle">Jus Jeruk</td>
                                        <td class="align-middle text-center">1</td>
                                        <td class="align-middle">Rp 8.000</td>
                                        <td class="text-center">
                                            <a href="#" class="btn" title="Hapus">
                                                <i class="bi bi-x-circle"></i>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <h1 class="text-center">Total Harga : <span class="text-bold">Rp 18.000</span></h1>
                            <label class="text-xs">Catatan</label>
                            <ul class="text-xs">
                                <li>
                                    Pembayaran hanya bisa dilakukan dengan uang tunai.
                                </li>
                                <li>
                                    Tidak melayani nota kosong.
                                </li>
                            </ul>
                            <div class="input-group mt-5">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="bi bi-person"></i></i></span>
                                </div>
                                <input type="text" class="form-control form-control-lg" placeholder="Nama Pelanggan">
                            </div>
                            <div class="input-group mt-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Rp</span>
                                </div>
                                <input type="text" class="form-control form-control-lg" placeholder="Nominal Uang">
                            </div>
                            <small id="emailHelp" class="form-text text-muted">Hanya masukkan angka tanpa huruf dan
                                tanda baca atau simbol.</small>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary form-control" data-toggle="modal"
                                data-target="#notaTransaksi"><i class="bi bi-cash-stack"></i>
                                Bayar
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('kasir.pages.profil.readProfilKasir')
    @include('kasir.pages.profil.updateProfilKasir')
    @include('kasir.pages.gantiPassword.formGantiPassword')
    @include('kasir.pages.nota.notaTransaksi')
    <!-- /.main-content -->
</div>
