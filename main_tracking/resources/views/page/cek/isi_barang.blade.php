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

<body class="index-page" style="background-color: #01796f;">

    @include('operasi.navbar')
    <main class="main"  style="background-color: #01796f;">
        <div class="container" style="background-color: #01796f;">
            <div class="row" style="margin-top: 100px;">
                    <div class="col-lg-12 col-sm-12 ">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <h3 class="mb-2 text-center fw-bold">Keterangan</h3>

                                <p>No Resi: <b>{{ $tracking->id }}</b></p>
                                <p>Pengirim: <b>{{ $tracking->nama_pengirim }}</b></p>
                                <p>No HP Pengirim: <b>{{ $tracking->no_hp_pengirim }}</b></p>
                                <p>Penerima: <b>{{ $tracking->nama_penerima }}</b></p>
                                <p>No HP Penerima: <b>{{ $tracking->no_hp_penerima }}</b></p>
                                <p>Nama Barang: <b>{{ $tracking->nama_barang }}</b></p>
                                <p>Jumlah Barang: <b>{{ $tracking->jumlah_barang }}</b></p>
                                <p>Jenis Pengiriman: <b>{{ ucfirst($tracking->jenis_pengiriman) }} ( Rp {{ number_format($tracking->biaya_pengiriman, 0, ',', '.') }} )</b></p>
                                <p>Pesan Pengirim: <b>{{ $tracking->pesan_pengirim }}</b></p>
                                <div class="d-flex ">
                                    <a href="{{ route('edit', $tracking) }}" class="btn btn-sm btn-warning fw-bold">Edit</a>
                                    <form action="{{ route('hapus', $tracking) }}" method="POST" class="d-inline ms-2" onsubmit="return confirmDelete()">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger fw-bold">Batal</button>
                                    </form>
                                </div>
                            </div>

                            <div class="card border border-1 mx-2 my-2">
                                <div class="card-body">
                                    <span class="badge text-secondary">10/11/2024</span><br>
                                    <span class="badge text-secondary">Paket anda sedang di kemas</span>
                                    <div class="border mt-2"></div>
                                </div>
                                <div class="card-body">
                                    <span class="badge text-secondary">11/11/2024</span><br>
                                    <span class="badge text-secondary">Paket anda sedang di jalan</span>
                                    <p class="badge text-secondary">Paket anda sedang menuju transit cakung</p>
                                    <div class="border mt-2"></div>
                                </div>
                                <div class="card-body">
                                    <span class="badge text-secondary">11/12/2024</span><br>
                                    <span class="badge text-secondary">Paket anda sedang di jalan</span>
                                    <p class="badge text-secondary">Paket anda sedang menuju transit pondok gede</p>
                                    <div class="border mt-2"></div>
                                </div>
                            </div>
                        </div>
                    </div>
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

    <script>
        function confirmDelete() {
            return confirm("Apakah Anda yakin ingin membatalkan pesanan?");
        }
    </script>
</body>

</html>
