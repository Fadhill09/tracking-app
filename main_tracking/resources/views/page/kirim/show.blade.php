@extends('page.kirim.layout')
@section('content')

<div class="card" style="margin:20px;">
    <div class="card-header">Detail Kirim Barang</div>
    <div class="card-body">
        <h5 class="card-title">Nama : {{ $kirim->nama_barang }}</h5>
        <p class="card-text">Seri : {{ $kirim->seri }}</p>
        <p class="card-text">Alamat : {{ $kirim->alamat }}</p>
        <p class="card-text">Harga : Rp. {{ number_format($kirim->harga, 2, ',', '.') }}</p>
        <p class="card-text">Ongkir : Rp. {{ number_format($kirim->ongkir, 2, ',', '.') }}</p>
    </div>
</div>

@endsection
