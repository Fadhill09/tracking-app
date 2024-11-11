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
            @foreach ($trackings as $tracking)
                <div class="col">
                    <div class="card shadow-sm border-light rounded-3">
                        <img class="card-img-top" src="{{ asset('gambar/350x200.png') }}" alt="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Resi Barang: <b>{{ $tracking->id }}</b></h5>
                            <p class="card-text">
                                <strong>Pengirim:</strong> {{ $tracking->nama_pengirim }}<br>
                                <strong>No HP Pengirim:</strong> {{ $tracking->no_hp_pengirim }}<br>
                                <strong>Alamat Pengirim:</strong> {{ $tracking->alamat_pengirim }}<br>
                                <strong>Penerima:</strong> {{ $tracking->nama_penerima }}<br>
                                <strong>No HP Penerima:</strong> {{ $tracking->no_hp_penerima }}<br>
                                <strong>Alamat Penerima:</strong> {{ $tracking->alamat_penerima }}<br>
                                <strong>Nama Barang:</strong> {{ $tracking->nama_barang }}<br>
                                <strong>Jumlah Barang:</strong> {{ $tracking->jumlah_barang }}<br>
                                <strong>Jenis Pengiriman:</strong> {{ ucfirst($tracking->jenis_pengiriman) }} (Rp
                                {{ number_format($tracking->biaya_pengiriman, 0, ',', '.') }})<br>
                                <strong>Pesan Pengirim:</strong> {{ $tracking->pesan_pengirim }}
                            </p>
                        </div>
                        <div class="card-footer d-flex justify-content-between">
                            <form action="{{ route('hapus', $tracking->id) }}" method="POST" class="d-inline ms-2" onsubmit="return confirmDelete()">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">
                                    <i class="bi bi-x-circle"></i> Batalkan Pesanan
                                </button>
                            </form>

                            <form action="{{ route('detail', $tracking->id) }}" method="get" class="d-inline">
                                <button class="btn btn-success btn-sm w-100">Terima</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>




    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    @include('admin.operasi.footer')<!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

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
