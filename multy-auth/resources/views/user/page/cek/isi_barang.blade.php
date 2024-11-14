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
            <div class="col-lg-12 col-sm-12">
                <div class="card shadow-sm border-1 mb-4" style="margin-top: 100px ;">
                    <div class="card-body">
                        <a href="{{ route('tampil') }}" class="btn btn-outline-primary"><i
                                class="bi bi-arrow-left-square me-2"></i>Kembali</a>
                        <h3 class="mb-4 text-center fw-bold text-uppercase">Keterangan Barang</h3>

                        <p>No Resi: <b>{{ $tracking->id }}</b></p>
                        <div class="d-flex flex-wrap">
                            <div class="col-lg-6 col-12">
                                <p>Pengirim: <b>{{ $tracking->nama_pengirim }}</b></p>
                                <p>No HP Pengirim: <b>{{ $tracking->no_hp_pengirim }}</b></p>
                                <p>Alamat Pengirim: <b>{{ $tracking->alamat_pengirim }}</b></p><br>
                            </div>
                            <div class="col-lg-6 col-12">
                                <p>Penerima: <b>{{ $tracking->nama_penerima }}</b></p>
                                <p>No HP Penerima: <b>{{ $tracking->no_hp_penerima }}</b> </p>
                                <p>Alamat Penerima: <b>{{ $tracking->alamat_penerima }}</b></p><br>
                            </div>
                        </div>

                        <p>Nama Barang: <b>{{ $tracking->nama_barang }}</b></p>
                        <p>Jumlah Barang: <b>{{ $tracking->jumlah_barang }}</b></p>
                        <p>Jenis Pengiriman: <b>{{ ucfirst($tracking->jenis_pengiriman) }} (
                                Rp{{ number_format($tracking->biaya_pengiriman, 0, ',', '.') }})</b> </p>
                        <p>Pesan Pengirim: <b>{{ $tracking->pesan_pengirim }}</b></p>

                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <a href="{{ route('edit', $tracking) }}" class="btn btn-sm btn-primary "><i
                                    class="bi bi-pencil-square"></i> Edit</a>
                            <form action="{{ route('hapus', $tracking) }}" method="POST" class="d-inline ms-2"
                                onsubmit="return confirmDelete()">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger "><i class="bi bi-x-circle"></i>
                                    Batalkan Pesanan</button>
                            </form>
                        </div>
                    </div>

                    <div class="container mt-4">
                        <div class="card shadow-sm border-1 mb-2">
                            <div class="card-body">
                                @foreach ($riwayatBarang as $barang)
                                    <div class="card-body">
                                        <span class="badge text-secondary">{{ $barang->date }}</span><br>
                                        <span class="badge text-secondary">{{ $barang->keterangan }}</span><br>
                                        <p class="badge text-secondary">{{ $barang->deskripsi }}</p>
                                        <div class="border mt-2"></div>
                                    </div>
                                    @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>



@include('user.operasi.footer')

<!-- Scroll Top -->
<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center bg-info"><i
    class="bi bi-arrow-up-short"></i></a>

<!-- Preloader -->
<div id="preloader"></div>

<!-- Vendor JS Files -->
@include('user.style.gaya')

<script>
    function confirmDelete() {
        return confirm("Apakah Anda yakin ingin membatalkan pesanan ?");
    }
</script>
</body>

</html>
