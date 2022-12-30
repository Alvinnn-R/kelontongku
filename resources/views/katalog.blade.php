@extends('layouts.app')

@section('content')
<h2 class="text-center fw-bold font-sans-serif">Katalog Produk</h2>
<div class="row p-4 text-dark justify-content-center">
    @foreach ($barang as $data)
    <div class="card me-md-2 mt-2" style="width: 20rem;">
        <img src="{{ Storage::url('public/gambar/').$data->image }}" width="293px" height="300px" class="rounded mt-3" alt="">
        <div class="card-body">
            <h5 class="card-title fw-bold pb-2">{{ $data->nama }}</h5>
            <p class="card-text lh-sm">{!! $data->description!!}</p>
            <p class="card-text">Rp. {{ $data->harga }}</p>
            <a href="#" class="btn btn-primary">Beli</a>
        </div>
    </div>
    @endforeach
</div>
@endsection