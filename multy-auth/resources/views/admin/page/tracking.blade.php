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


</head>

<body>

    <!-- ======= Header ======= -->
    @include('admin.operasi.navbar')<!-- End Header -->

    <!-- ======= Sidebar ======= -->
    @include('admin.operasi.sidebar')<!-- End Sidebar-->

    <main id="main" class="main">
        <div class="row">
            <div class="col-sm-12">
                <form action="{{ route('submit', ['barangid' => $barang->id]) }}" method="POST">
                    @csrf
                    <div class="card shadow-sm border-1">
                        <div class="card-body">

                            <div class="mt-3">
                                <label class="form-label" for="date">Tanggal</label>
                                <input type="date" name="date" id="date" class="form-control" required>
                            </div>


                            <div class="mt-3">
                                <label class="form-label" for="keterangan">Keterangan</label>
                                <select class="form-select" name="keterangan" id="keterangan" required>
                                    <option value="" selected disabled>--Pilih Status Paket--</option>
                                    <option value="Kemas">Di Kemas</option>
                                    <option value="Perjalanan">Di Perjalanan</option>
                                    <option value="Sampai">Sampai</option>
                                </select>
                            </div>

                            <div class="mt-3">
                                <label class="form-label" for="deskripsi">Deskripsi</label>
                                <textarea class="form-control" name="deskripsi" id="deskripsi" rows="3" placeholder="Masukkan deskripsi tambahan"></textarea>
                            </div>

                            <div class="mt-5 d-flex justify-content-between">
                                <a href="{{ route('detail', ['id' => $barang->id]) }}" class="btn btn-danger"><i class="bi bi-x-circle"></i> Batal</a>
                                <button type="submit" class="btn btn-primary"><i class="bi bi-check-circle"></i> Post</button>
                            </div>
                        </div>
                    </div>
                </form>

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
