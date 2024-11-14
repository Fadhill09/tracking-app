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
        <div class="row">
            <div class="col-lg-8 col-md-10 col-sm-12 mx-auto">
                <div class="card shadow-lg border-0 rounded-4">
                    <div class="card-header bg-primary text-white rounded-top-4">
                        <h4 class="mb-0">Detail Barang</h4>
                    </div>
                    <div class="card-body p-4">
                        <p><strong>No Resi:</strong> <span class="text-primary">{{ $tracking->id }}</span></p>
                        <p><strong>Pengirim:</strong> <span class="text-primary">{{ $tracking->nama_pengirim }}</span></p>
                        <p><strong>No HP Pengirim:</strong> <span class="text-primary">{{ $tracking->no_hp_pengirim }}</span></p>
                        <p><strong>Alamat Pengirim:</strong> <span class="text-primary">{{ $tracking->alamat_pengirim }}</span></p>
                        <p><strong>Penerima:</strong> <span class="text-primary">{{ $tracking->nama_penerima }}</span></p>
                        <p><strong>No HP Penerima:</strong> <span class="text-primary">{{ $tracking->no_hp_penerima }}</span></p>
                        <p><strong>Alamat Penerima:</strong> <span class="text-primary">{{ $tracking->alamat_penerima }}</span></p>
                        <p><strong>Nama Barang:</strong> <span class="text-primary">{{ $tracking->nama_barang }}</span></p>
                        <p><strong>Jumlah Barang:</strong> <span class="text-primary">{{ $tracking->jumlah_barang }}</span></p>
                        <p><strong>Jenis Pengiriman:</strong> <span class="text-primary">{{ ucfirst($tracking->jenis_pengiriman) }} (Rp {{ number_format($tracking->biaya_pengiriman, 0, ',', '.') }})</span></p>
                        <p><strong>Pesan Pengirim:</strong> <span class="text-primary">{{ $tracking->pesan_pengirim }}</span></p>

                        <div class="container mt-4">
                            <div class="card shadow-sm border-0 rounded-3">
                                @foreach ($barang as $data)
                                <div class="card-body border-bottom p-3">
                                    <span class="badge bg-light text-dark mb-1">{{ $data->date }} <i class="bi bi-calendar-fill ms-1"></i></span><br>
                                    <span class="badge bg-light text-dark">{{ $data->keterangan }} <i class="bi bi-geo-alt-fill ms-1"></i></span>
                                    <p class="mt-2 text-secondary">{{ $data->deskripsi }}</p>

                                    <div class="d-flex justify-content-end">
                                        <form action="{{ route('delete', $data->id) }}" method="POST" class="me-2">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-outline-danger btn-sm" type="submit">
                                                <i class="bi bi-trash3-fill"></i> Hapus
                                            </button>
                                        </form>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <a class="btn btn-success mt-3" href="{{ route('tracking') }}">Lanjut</a>
                        </div>
                    </div>
                </div>
            </div>
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
