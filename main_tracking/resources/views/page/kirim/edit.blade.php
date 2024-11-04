
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title></title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    @include('style.gaya')

    <!-- =======================================================
  * Template Name: Impact
  * Template URL: https://bootstrapmade.com/impact-bootstrap-business-website-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

    @include('operasi.navbar')

    @extends('layouts.app')

    @section('content')
    <div class="container">
        <h2>Edit Pembelian</h2>
        <form action="{{ route('update', $pembelian->id) }}" method="post">
            @csrf
            @method('PUT')
            {{-- <div class="form-group">
                <label for="seri">Seri</label>
                <input type="text" name="seri" id="seri" class="form-control" value="{{ $pembelian->seri }}" required>
            </div> --}}
            <div class="form-group">
                <label for="nama_barang">Nama Barang</label>
                <input type="text" name="nama_barang" id="nama_barang" class="form-control" value="{{ $pembelian->nama_barang }}" required>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" name="alamat" id="alamat" class="form-control" value="{{ $pembelian->alamat }}" required>
            </div>
            <div class="form-group">
                <label for="harga">Harga</label>
                <input type="number" name="harga" id="harga" class="form-control" value="{{ $pembelian->harga }}" required>
            </div>
            {{-- <div class="form-group">
                <label for="ongkir">Ongkir</label>
                <input type="number" name="ongkir" id="ongkir" class="form-control" value="{{ $pembelian->ongkir }}" required>
            </div> --}}
            <input type="submit" value="Update" class="btn btn-success">
        </form>
    </div>
    @endsection
    

    @include('operasi.footer')

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    @include('style.gaya')

</body>

</html>


