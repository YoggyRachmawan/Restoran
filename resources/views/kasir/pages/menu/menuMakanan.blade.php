@extends('kasir.kasirRestoran')
@section('makanan')
    <div class="row">
        @foreach ($foods as $food)
            <div class="col-4">
                <div class="card">
                    <img src="{{ asset('makanan/' . $food->fotoMakanan) }}" class="card-img-top">
                    <input type="hidden" value="{{ $food->harga }}">
                    <button type="submit" class="btn btn-light form-control text-bold">{{ $food->namaMakanan }}</button>
                </div>
            </div>
        @endforeach
    </div>
@endsection
