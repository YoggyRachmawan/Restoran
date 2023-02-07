<!-- Modal -->
<div class="modal fade" id="formGantiPassword" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Form Ganti Password</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('gantiPassword') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <div class="form-group">
                            <h6>Password Saat Ini</h6>
                            <input type="password" class="form-control @error('passwordSaatIni') is-invalid @enderror"
                                name="passwordSaatIni">
                            @error('passwordSaatIni')
                                <small style="color: red;">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <h6>Password Baru</h6>
                            <input type="password" class="form-control @error('password') is-invalid @enderror"
                                name="password">
                            <small id="emailHelp" class="form-text text-muted">Password minimal 8
                                karakter.</small>
                        </div>
                        <div class="form-group">
                            <h6>Konfirmasi Password Baru</h6>
                            <input type="password" class="form-control @error('password') is-invalid @enderror"
                                name="password_confirmation">
                            @error('password')
                                <small style="color: red;">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                </div>
                <!-- /.modal-body -->
                <div class="modal-footer">
                    <button type="submit" class="btn btn-secondary form-control">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
