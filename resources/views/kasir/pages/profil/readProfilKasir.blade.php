<!-- Modal -->
<div class="modal fade" id="profilSaya" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Profil Saya</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row justify-content-around mt-3 mb-3">
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
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-toggle="modal"
                    data-target="#ubahDataProfil{{ Auth::user()->id }}" data-dismiss="modal"><i
                        class="bi bi-pencil-square"></i> Ubah Data
                    Profil</button>
            </div>
        </div>
    </div>
</div>
