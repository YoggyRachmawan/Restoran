<!-- Modal -->
<form action="{{ route('updateProfilKasir', Auth::user()->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="modal fade" id="ubahDataProfil{{ Auth::user()->id }}" data-backdrop="static" data-keyboard="false"
        tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Form Ubah Data Profil</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
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
                                <input type="text" class="form-control @error('namaPegawai') is-invalid @enderror"
                                    name="namaPegawai" value="{{ Auth::user()->namaPegawai }}">
                                @error('namaPegawai')
                                    <small style="color: red;">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <h6>Tempat Lahir</h6>
                                <input type="text" class="form-control  @error('tempatLahir') is-invalid @enderror"
                                    name="tempatLahir" value="{{ Auth::user()->tempatLahir }}">
                                @error('tempatLahir')
                                    <small style="color: red;">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <h6>Tanggal Lahir</h6>
                                <input type="text" class="form-control @error('tanggalLahir') is-invalid @enderror"
                                    id="datepicker" name="tanggalLahir"
                                    value="{{ date('d-m-Y', strtotime(Auth::user()->tanggalLahir)) }}">
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
                                <option
                                    value="Laki-laki"{{ Auth::user()->jenisKelamin == 'Laki-laki' ? 'selected' : '' }}>
                                    Laki-laki</option>
                                <option
                                    value="Perempuan"{{ Auth::user()->jenisKelamin == 'Perempuan' ? 'selected' : '' }}>
                                    Perempuan</option>
                            </select>
                            @error('jenisKelamin')
                                <small style="color: red;">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <h6>Email</h6>
                                <input type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ Auth::user()->email }}">
                                @error('email')
                                    <small style="color: red;">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <h6>Nomor Telepon</h6>
                                <input type="text" class="form-control @error('nomorTelepon') is-invalid @enderror"
                                    name="nomorTelepon" value="{{ Auth::user()->nomorTelepon }}">
                                @error('nomorTelepon')
                                    <small style="color: red;">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <h6>Alamat</h6>
                                <textarea class="form-control @error('alamat') is-invalid @enderror" name="alamat" rows="3">{{ Auth::user()->alamat }}</textarea>
                                @error('alamat')
                                    <small style="color: red;">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-secondary"><i class="bi bi-save2"></i> Simpan</button>
                </div>
            </div>
        </div>
    </div>
</form>
