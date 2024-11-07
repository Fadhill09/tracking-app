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
                <div class="col-lg-12 col-sm-12">
                    <div class="card shadow-sm border-0">
                        <div class="card-body">
                            <h3 class="mb-4 text-center fw-bold text-uppercase">Keterangan Barang</h3>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <p>No Resi: <b>{{ $tracking->id }}</b></p>
                                    <p>Pengirim: <b>{{ $tracking->nama_pengirim }}</b></p>
                                    <p>No HP Pengirim: <b>{{ $tracking->no_hp_pengirim }}</b></p>
                                </div>
                                <div class="col-md-6">
                                    <p>Penerima: <b>{{ $tracking->nama_penerima }}</b></p>
                                    <p>No HP Penerima: <b>{{ $tracking->no_hp_penerima }}</b></p>
                                    <p>Nama Barang: <b>{{ $tracking->nama_barang }}</b></p>
                                    <p>Jumlah Barang: <b>{{ $tracking->jumlah_barang }}</b></p>
                                </div>
                            </div>

                            <p>Jenis Pengiriman: <b>{{ ucfirst($tracking->jenis_pengiriman) }} ( Rp {{ number_format($tracking->biaya_pengiriman, 0, ',', '.') }} )</b></p>
                            <p>Pesan Pengirim: <b>{{ $tracking->pesan_pengirim }}</b></p>

                            <div class="d-flex justify-content-between align-items-center mt-4">
                                <a href="{{ route('edit', $tracking) }}" class="btn btn-sm btn-warning fw-bold">Edit</a>
                                <form action="{{ route('hapus', $tracking) }}" method="POST" class="d-inline ms-2" onsubmit="return confirmDelete()">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger fw-bold">Batal</button>
                                </form>
                            </div>
                        </div>

                        <!-- Status Pengiriman Section -->
                        <div class="container mt-4">
                            <div class="card shadow-sm border-0">
                                <div class="card-header ">
                                    <h5 class="mb-0">Status Pengiriman Paket</h5>
                                </div>
                                <div class="card-body">
                                    <!-- Progress Bar -->
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 33%;" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>

                                    <!-- Status List -->
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <span class="badge text-secondary">10/11/2024</span>
                                        <span class="badge text-success">Paket Sedang Di Kemas</span>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <span class="badge text-secondary">11/11/2024</span>
                                        <span class="badge text-warning">Paket Sedang Di Jalan</span>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <span class="badge text-secondary">12/11/2024</span>
                                        <span class="badge text-info">Paket Sedang Menuju Transit Pondok Gede</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>



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
