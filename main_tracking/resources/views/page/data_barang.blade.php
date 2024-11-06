<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Daftar Barang</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    @include('style.gaya')
</head>

<body class="index-page">

    @include('operasi.navbar')
    <main class="main">
        <div class="container">
            <div class="row" style="margin-top: 100px;">
                @foreach ($trackings as $tracking)
                    <div class="col-12 col-sm-6 col-md-4 mb-4"> 
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <p>No Resi: <b>{{ $tracking->id }}</b></p>
                                <p>Pengirim: <b>{{ $tracking->nama_pengirim }}</b></p>
                                <p>No HP Pengirim: <b>{{ $tracking->no_hp_pengirim }}</b></p>
                                <p>Penerima: <b>{{ $tracking->nama_penerima }}</b></p>
                                <p>No HP Penerima: <b>{{ $tracking->no_hp_penerima }}</b></p>
                                <p>Jenis Barang: <b>{{ $tracking->nama_barang }}</b></p>
                                <p>Jumlah Barang: <b>{{ $tracking->jumlah_barang }}</b></p>
                                <p>Jenis Pengiriman: <b>{{ ucfirst($tracking->jenis_pengiriman) }} ( Rp {{ number_format($tracking->biaya_pengiriman, 0, ',', '.') }} )</b></p>
                                <p>Pesan Pengirim: <b>{{ $tracking->pesan_pengirim }}</b></p>

                                <div class="mt-2">
                                    <a href="{{ route('isidaftar', $tracking) }}" class="btn btn-sm btn-success fw-bold">Lihat</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </main>

    @include('operasi.footer')

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center">
        <i class="bi bi-arrow-up-short"></i>
    </a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    @include('style.gaya')

</body>

</html>
