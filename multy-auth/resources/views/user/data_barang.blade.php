<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Daftar Barang</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    @include('user.style.gaya')
</head>

<body class="index-page">

    @include('user.operasi.navbar')
    <main class="main">
        <div class="container">
            <div class="row" style="margin-top: 100px;">
                @foreach ($barangs as $barang)
                    <div class="col-12 col-sm-6 col-md-6 mb-4">
                        <div class="card shadow-lg rounded-3 border-light">
                            <div class="card-body">
                                {{-- <h5 class="card-title text-dark">No Resi: <b>{{ $barang->id }}</b></h5>
                                <p class="card-text">Pengirim: <b>{{ $barang->nama_pengirim }}</b></p>
                                <p class="card-text">No HP Pengirim: <b>{{ $barang->no_hp_pengirim }}</b></p>
                                <p class="card-text">Alamat Pengirim: <b>{{ $barang->alamat_pengirim }}</b></p><br>
                                <p class="card-text">Penerima: <b>{{ $barang->nama_penerima }}</b></p>
                                <p class="card-text">No HP Penerima: <b>{{ $barang->no_hp_penerima }}</b></p>
                                <p class="card-text">Alamat Penerima: <b>{{ $barang->alamat_penerima }}</b></p><br>
                                <p class="card-text">Jenis Barang: <b>{{ $barang->nama_barang }}</b></p>
                                <p class="card-text">Jumlah Barang: <b>{{ $barang->jumlah_barang }}</b></p>
                                <p class="card-text">Jenis Pengiriman: <b>{{ ucfirst($barang->jenis_pengiriman) }} ( Rp {{ number_format($barang->biaya_pengiriman, 0, ',', '.') }} )</b></p>
                                <p class="card-text">Pesan Pengirim: <b>{{ $barang->pesan_pengirim }}</b></p> --}}

                                {{-- opsi tampilan yg lain --}}

                          

                                <p>No Resi: <b>{{ $barang->id }}</b></p>
                                <div class="d-flex flex-wrap">
                                    <div class="col-lg-6 col-12">
                                        <p>Pengirim: <b>{{ $barang->nama_pengirim }}</b></p>
                                        <p>No HP Pengirim: <b>{{ $barang->no_hp_pengirim }}</b></p>
                                        <p>Alamat Pengirim: <b>{{ $barang->alamat_pengirim }}</b></p>
                                        <p>Pesan Pengirim: <b>{{ $barang->pesan_pengirim }}</b></p> <br>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <p>Penerima: <b>{{ $barang->nama_penerima }}</b></p>
                                        <p>No HP Penerima: <b>{{ $barang->no_hp_penerima }}</b> </p>
                                        <p>Alamat Penerima: <b>{{ $barang->alamat_penerima }}</b></p><br>
                                    </div>
                                </div><br>
                                <p>Nama Barang: <b>{{ $barang->nama_barang }}</b></p>
                                <p>Jumlah Barang: <b>{{ $barang->jumlah_barang }}</b></p>
                                <p>Jenis Pengiriman: <b>{{ ucfirst($barang->jenis_pengiriman) }} (
                                        Rp{{ number_format($barang->biaya_pengiriman, 0, ',', '.') }})</b> </p>


                                <div class="mt-3">
                                    <a href="{{ route('isidaftar', $barang) }}"
                                        class="btn btn-sm btn-success fw-bold shadow-sm"><i
                                            class="bi bi-arrow-right-square me-1"></i> Lihat</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </main>


    @include('user.operasi.footer')

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center bg-info"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    @include('user.style.gaya')

</body>

</html>
