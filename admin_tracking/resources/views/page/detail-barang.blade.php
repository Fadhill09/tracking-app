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
    @include('operasi.navbar')<!-- End Header -->

    <!-- ======= Sidebar ======= -->
    @include('operasi.sidebar')<!-- End Sidebar-->

    <main id="main" class="main">
        <div class="row">
            <div class="col-lg-5 col-sm-12">
                <form action="{{ route('submit') }}" method="POST">
                    @csrf
                    <div class="card">
                        <div class="card-body">
                            <div class="mt-3">
                                <label class="form-label" for="">Tanggal</label>
                                <input type="date" name="date" class="form-control">
                            </div>
                            <div class="mt-3">
                                <label class="form-label" for="">Keterangan</label>
                                <select class="form-select" name="keterangan" aria-label="Default select example">
                                    <option selected>--Paket--</option>
                                    <option value="Kemas">Di kemas</option>
                                    <option value="Perjalanan">Di perjalanan</option>
                                    <option value="Sampai">Sampai</option>
                                </select>
                            </div>
                            <div class="mt-3">
                                <label class="form-label" for="">Deskripsi</label>
                                <textarea class="form-control" name="deskripsi"></textarea>
                            </div>
                            <div class="mt-5 d-flex justify-content-between">
                                <button type="reset" class="btn btn-danger">Batal</button>
                                <button class="btn btn-primary">Lanjut</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-7 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Detail barang</h4>
                    </div>
                    @foreach($trackings as $key => $tracking)
                    <div class="card-body mt-3">
                        <p>No resi : <p>{{ $tracking->id }}</p></p>
                        <p>Pengirim : <p>{{ $tracking->nama_pengirim }}</p></p>
                        <p>No HP Pengirim : <p>{{ $tracking->no_hp_pengirim }}</p></p>
                        <p>Penerima : <p>{{ $tracking->nama_penerima }}</p></p>
                        <p>No HP Penerima : <p>{{ $tracking->no_hp_penerima }}</p></p>
                        <p>Nama barang : <p>{{ $tracking->nama_barang }}</p></p>
                        <p>Jumlah barang : <p>{{ $tracking->jumlah_barang }}</p></p>
                        <p>Jenis pengiriman : <p>{{ ucfirst$tracking->jenis_barang }}</p></p>
                        <p>Biaya pengiriman : <p>{{ number_format$tracking->biaya_pengiriman }}</p></p>
                        <p>Pesan pengirim : <p>{{ $tracking->pesan_pengirim,0, ',', '.' }}</p></p>
                    </div>
                    @endforeach
                    <div class="card border border-1 mx-2 my-2">
                        @foreach($barang as $key => $data)
                        <div class="card-body">
                            <hr>
                            <span class="badge text-secondary">{{ $data->date }}</span><i class="bi bi-calendar-fill"></i><br>
                            <span class="badge text-secondary">{{ $data->keterangan }}</span><i class="bi bi-geo-alt-fill"></i><br>
                            <span class="badge text-secondary">{{ $data->deskripsi }}</span>
                         <hr>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    @include('operasi.footer')<!-- End Footer -->

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
