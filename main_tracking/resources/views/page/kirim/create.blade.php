@extends('page.kirim.layout')
@section('content')

<div class="card" style="margin:20px;">
    <div class="card-header">Create New Pembelian</div>
    <div class="card-body">
        <form action="{{ url('kirim') }}" method="post">
            {!! csrf_field() !!}

            <div class="form-group">
                <label for="seri">Seri</label>
                <input type="text" name="seri" id="seri" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="nama_barang">Nama Barang</label>
                <input type="text" name="nama_barang" id="nama_barang" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" name="alamat" id="alamat" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="harga">Harga</label>
                <input type="number" name="harga" id="harga" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="ongkir">Ongkir</label>
                <input type="number" name="ongkir" id="ongkir" class="form-control" required>
            </div>

            <input type="submit" value="Save" class="btn btn-success">
        </form>
    </div>
</div>

@endsection
