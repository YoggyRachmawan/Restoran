@extends('kasir.kasirRestoran')
@section('minuman')
    <div class="row">
        @foreach ($drinks as $drink)
            <div class="col-4">
                <div class="card">
                    <img src="{{ asset('minuman/' . $drink->fotoMinuman) }}" class="card-img-top">
                    <input type="hidden" value="{{ $drink->harga }}">
                    <button type="submit" class="btn btn-light form-control text-bold">{{ $drink->namaMinuman }}</button>
                </div>
            </div>
        @endforeach
    </div>
@endsection
