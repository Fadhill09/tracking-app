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
    @include('operasi.navbar')<!-- End Header -->

    <!-- ======= Sidebar ======= -->
    @include('operasi.sidebar')<!-- End Sidebar-->

    <main id="main" class="main">
        <div class="row">
            <div class="col-lg-4 col-sm-12">
                <form action="{{ route('submit') }}" method="POST">
                    @csrf
                    <div class="card shadow-sm border-1">
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
                                <a href="{{ route('barang') }}" class="btn btn-danger"><i class="bi bi-x-circle"></i>
                                    Batal</a>
                                <button class="btn btn-primary"><i class="bi bi-check-circle"></i> Post</button>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
            <div class="col-lg-8 col-md-10 col-sm-12 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h4>Detail Barang</h4>
                    </div>
                    <div class="card-body">
                        <div class="col-12">
                            <div class="card-body">
                                <p>No Resi: <b>{{ $tracking->id }}</b></p>
                                <p>Pengirim: <b>{{ $tracking->nama_pengirim }}</b></p>
                                <p>No HP Pengirim: <b>{{ $tracking->no_hp_pengirim }}</b></p>
                                <p>Alamat Pengirim: <b>{{ $tracking->alamat_pengirim }}</b></p>
                                <p>Penerima: <b>{{ $tracking->nama_penerima }}</b></p>
                                <p>No HP Penerima: <b>{{ $tracking->no_hp_penerima }}</b> </p>
                                <p>Alamat Penerima: <b>{{ $tracking->alamat_penerima }}</b></p>
                                <p>Nama Barang: <b>{{ $tracking->nama_barang }}</b></p>
                                <p>Jumlah Barang: <b>{{ $tracking->jumlah_barang }}</b></p>
                                <p>Jenis Pengiriman: <b>{{ ucfirst($tracking->jenis_pengiriman) }} (Rp
                                        {{ number_format($tracking->biaya_pengiriman, 0, ',', '.') }})</b> </p>
                                <p>Pesan Pengirim: <b>{{ $tracking->pesan_pengirim }}</b></p>
                            </div>
                        </div>

                        <div class="container mt-4">
                            <div class="card shadow-sm border-1 mb-2">
                                @foreach ($barang as $data)
                                    <div class="card-body ">
                                        <span class="badge text-secondary">{{ $data->date }} <i
                                                class="bi bi-calendar-fill"></i> </span><br>
                                        <span class="badge text-secondary">{{ $data->keterangan }} <i
                                                class="bi bi-geo-alt-fill"></i></span><br>
                                        <p class="badge text-secondary">{{ $data->deskripsi }} </p>

                                        <div class="d-flex justify-content-end">
                                            <form action="{{ route('delete', $data->id) }}" method="post">
                                                @csrf
                                                <button class="btn btn-danger" type="submit">
                                                    <i class="bi bi-trash3-fill"></i>
                                                </button>
                                            </form>
                                        </div>
                                        <div class="border mt-2"></div>

                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
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
