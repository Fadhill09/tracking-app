@extends('page.kirim.layout')
@section('content')

<div class="card" style="margin:20px;">
    <div class="card-header">Edit Kirim</div>
    <div class="card-body">
        <form action="{{ url('kirim/' . $kirim->id) }}" method="post">
            {!! csrf_field() !!}
            @method("PATCH")
            <input type="hidden" name="id" id="id" value="{{ $kirim->id }}" />

            <div class="form-group">
                <label for="seri">Seri</label>
                <input type="text" name="seri" id="seri" value="{{ $kirim->seri }}" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="nama_barang">Nama Barang</label>
                <input type="text" name="nama_barang" id="nama_barang" value="{{ $kirim->nama_barang }}" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" name="alamat" id="alamat" value="{{ $kirim->alamat }}" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="harga">Harga</label>
                <input type="number" name="harga" id="harga" value="{{ $kirim->harga }}" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="ongkir">Ongkir</label>
                <input type="number" name="ongkir" id="ongkir" value="{{ $kirim->ongkir }}" class="form-control" required>
            </div>

            <input type="submit" value="Update" class="btn btn-success">
        </form>
    </div>
</div>

@endsection
