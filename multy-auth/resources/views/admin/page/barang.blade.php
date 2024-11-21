<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Dashboard - NiceAdmin Bootstrap Template</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('NiceAdmin/assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('NiceAdmin/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('NiceAdmin/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('NiceAdmin/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('NiceAdmin/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('NiceAdmin/assets/vendor/quill/quill.snow.css') }}" rel="stylesheet">
    <link href="{{ asset('NiceAdmin/assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
    <link href="{{ asset('NiceAdmin/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('NiceAdmin/assets/vendor/simple-datatables/style.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('NiceAdmin/assets/css/style.css') }}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: NiceAdmin
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Updated: Apr 20 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    @include('admin.operasi.navbar')<!-- End Header -->

    <!-- ======= Sidebar ======= -->
    @include('admin.operasi.sidebar')<!-- End Sidebar-->

    <main id="main" class="main">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach ($barangs as $barang)
                <div class="col-lg-5">
                    <div class="card shadow border-0 rounded-4 h-100">
                        <div class="card-body">
                            <h5 class="card-title ">Resi Barang: <b>{{ $barang->id }}</b></h5>
                            <p>No Resi: <span class="fw-bold">{{ $barang->id }}</span></p>
                            <p>Pengirim: <span class="fw-bold">{{ $barang->nama_pengirim }}</span></p>
                            <p>No HP Pengirim: <span class="fw-bold">{{ $barang->no_hp_pengirim }}</span></p>
                            <p>Alamat Pengirim: <span class="fw-bold">{{ $barang->alamat_pengirim }}</span></p>
                            <p>Pesan Pengirim: <span class="fw-bold">{{ $barang->pesan_pengirim }}</span></p><br>
                            <p>Penerima: <span class="fw-bold">{{ $barang->nama_penerima }}</span></p>
                            <p>No HP Penerima: <span class="fw-bold">{{ $barang->no_hp_penerima }}</span></p>
                            <p>Alamat Penerima: <span class="fw-bold">{{ $barang->alamat_penerima }}</span></p><br>
                            <p>Nama Barang: <span class="fw-bold">{{ $barang->nama_barang }}</span></p>
                            <p>Jumlah Barang: <span class="fw-bold">{{ $barang->jumlah_barang }}</span></p>
                            <p>Jenis Pengiriman: <span class="fw-bold">{{ ucfirst($barang->jenis_pengiriman) }} (Rp {{ number_format($barang->biaya_pengiriman, 0, ',', '.') }})</span></p>


                        </div>
                        <div class="card-footer bg-light d-flex justify-content-between align-items-center">
                            <form action="{{ route('hapus', $barang->id) }}" method="post" class="d-inline ms-2" >
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-outline-danger btn-sm rounded-pill px-3"    onsubmit="return confirmDelete()">
                                    <i class="bi bi-x-circle-fill me-1"></i> Tolak Pesanan
                                </button>
                            </form>

                            <form action="{{ route('detail', $barang->id) }}" method="get" class="d-inline">
                                <button class="btn btn-outline-success btn-sm rounded-pill px-3">
                                    <i class="bi bi-check-circle-fill me-1"></i> Terima
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    @include('admin.operasi.footer')<!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

            <script>
                function confirmDelete() {
                    return confirm("Apakah Anda yakin ingin membatalkan pesanan ?");
                }
            </script>

    <!-- Vendor JS Files -->
    <script src="{{ asset('NiceAdmin/assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('NiceAdmin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('NiceAdmin/assets/vendor/chart.js/chart.umd.js') }}"></script>
    <script src="{{ asset('NiceAdmin/assets/vendor/echarts/echarts.min.js') }}"></script>
    <script src="{{ asset('NiceAdmin/assets/vendor/quill/quill.js') }}"></script>
    <script src="{{ asset('NiceAdmin/assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
    <script src="{{ asset('NiceAdmin/assets/vendor/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('NiceAdmin/assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('NiceAdmin/assets/js/main.js') }}"></script>

</body>

</html>
