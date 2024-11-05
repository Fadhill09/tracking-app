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
            <div class="col-lg-3 col-sm-12">
                <a href="{{ route('detail') }}">
                    <div class="card">
                        <img class="card-header" src="{{ asset('gambar/350x200.png') }}" alt="card-img-top">
                        <div class="card-body">
                            <h4 class="card-title">Nama barang</h4>
                            <p class="card-text">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Asperiores voluptatem
                                voluptatum quos nobis recusandae distinctio delectus dolorem temporibus sunt, vero
                                incidunt obcaecati alias velit provident assumenda necessitatibus ex quisquam accusamus.
                            </p>
                            <div class="mt-5 d-flex justify-content-between">
                                <button class="btn btn-danger">Batal</button>
                                <button class="btn btn-primary">Lanjut</button>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-sm-12">
                <a href="###">
                    <div class="card">
                        <img class="card-header" src="{{ asset('gambar/350x200.png') }}" alt="card-img-top">
                        <div class="card-body">
                            <h4 class="card-title">Nama barang</h4>
                            <p class="card-text">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Asperiores voluptatem
                                voluptatum quos nobis recusandae distinctio delectus dolorem temporibus sunt, vero
                                incidunt obcaecati alias velit provident assumenda necessitatibus ex quisquam accusamus.
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-sm-12">
                <a href="###">
                    <div class="card">
                        <img class="card-header" src="{{ asset('gambar/350x200.png') }}" alt="card-img-top">
                        <div class="card-body">
                            <h4 class="card-title">Nama barang</h4>
                            <p class="card-text">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Asperiores voluptatem
                                voluptatum quos nobis recusandae distinctio delectus dolorem temporibus sunt, vero
                                incidunt obcaecati alias velit provident assumenda necessitatibus ex quisquam accusamus.
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-sm-12">
                <a href="###">
                    <div class="card">
                        <img class="card-header" src="{{ asset('gambar/350x200.png') }}" alt="card-img-top">
                        <div class="card-body">
                            <h4 class="card-title">Nama barang</h4>
                            <p class="card-text">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Asperiores voluptatem
                                voluptatum quos nobis recusandae distinctio delectus dolorem temporibus sunt, vero
                                incidunt obcaecati alias velit provident assumenda necessitatibus ex quisquam accusamus.
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-sm-12">
                <a href="###">
                    <div class="card">
                        <img class="card-header" src="{{ asset('gambar/350x200.png') }}" alt="card-img-top">
                        <div class="card-body">
                            <h4 class="card-title">Nama barang</h4>
                            <p class="card-text">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Asperiores voluptatem
                                voluptatum quos nobis recusandae distinctio delectus dolorem temporibus sunt, vero
                                incidunt obcaecati alias velit provident assumenda necessitatibus ex quisquam accusamus.
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-sm-12">
                <a href="###">
                    <div class="card">
                        <img class="card-header" src="{{ asset('gambar/350x200.png') }}" alt="card-img-top">
                        <div class="card-body">
                            <h4 class="card-title">Nama barang</h4>
                            <p class="card-text">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Asperiores voluptatem
                                voluptatum quos nobis recusandae distinctio delectus dolorem temporibus sunt, vero
                                incidunt obcaecati alias velit provident assumenda necessitatibus ex quisquam accusamus.
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-sm-12">
                <a href="###">
                    <div class="card">
                        <img class="card-header" src="{{ asset('gambar/350x200.png') }}" alt="card-img-top">
                        <div class="card-body">
                            <h4 class="card-title">Nama barang</h4>
                            <p class="card-text">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Asperiores voluptatem
                                voluptatum quos nobis recusandae distinctio delectus dolorem temporibus sunt, vero
                                incidunt obcaecati alias velit provident assumenda necessitatibus ex quisquam accusamus.
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-sm-12">
                <a href="###">
                    <div class="card">
                        <img class="card-header" src="{{ asset('gambar/350x200.png') }}" alt="card-img-top">
                        <div class="card-body">
                            <h4 class="card-title">Nama barang</h4>
                            <p class="card-text">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Asperiores voluptatem
                                voluptatum quos nobis recusandae distinctio delectus dolorem temporibus sunt, vero
                                incidunt obcaecati alias velit provident assumenda necessitatibus ex quisquam accusamus.
                            </p>
                        </div>
                    </div>
                </a>
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