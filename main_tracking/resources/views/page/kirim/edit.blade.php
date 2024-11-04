@extends('pembelian.layout')
@section('content')

<div class="card" style="margin:20px;">
    <div class="card-header">Edit Pembelian</div>
    <div class="card-body">
        <form action="{{ url('pembelian/' .$pembelian->id) }}" method="post">
            {!! csrf_field() !!}
            @method("PATCH")
            <input type="hidden" name="id" id="id" value="{{$pembelian->id}}" />

            <div class="form-group">
                <label for="seri">Seri</label>
                <input type="text" name="seri" id="seri" value="{{$pembelian->seri}}" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="nama_barang">Nama Barang</label>
                <input type="text" name="nama_barang" id="nama_barang" value="{{$pembelian->nama_barang}}" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" name="alamat" id="alamat" value="{{$pembelian->alamat}}" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="harga">Harga</label>
                <input type="number" name="harga" id="harga" value="{{$pembelian->harga}}" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="ongkir">Ongkir</label>
                <input type="number" name="ongkir" id="ongkir" value="{{$pembelian->ongkir}}" class="form-control" required>
            </div>

            <input type="submit" value="Update" class="btn btn-success">
        </form>
    </div>
</div>

@endsection
