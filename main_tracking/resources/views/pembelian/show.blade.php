@extends('students.layout')
@section('content')

<div class="card" style="margin:20px;">
    <div class="card-header">Detail Pembelian</div>
    <div class="card-body">
        <h5 class="card-title">Nama : {{ $pembelian->nama_barang }}</h5>
        <p class="card-text">Seri : {{ $pembelian->seri }}</p>
        <p class="card-text">Alamat : {{ $pembelian->alamat }}</p>
        <p class="card-text">Harga : Rp. {{ number_format($pembelian->harga, 2, ',', '.') }}</p>
        <p class="card-text">Ongkir : Rp. {{ number_format($pembelian->ongkir, 2, ',', '.') }}</p>
    </div>
</div>

@endsection

