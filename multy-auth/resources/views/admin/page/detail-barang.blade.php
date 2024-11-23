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
                        <p>Jenis Pengiriman: <span class="fw-bold">{{ ucfirst($barang->jenis_pengiriman) }} (Rp
                                {{ number_format($barang->biaya_pengiriman, 0, ',', '.') }})</span></p>


                        <div class="container mt-4">
                            <div class="card shadow-sm border-1 mb-4">
                                @foreach ($barang->trackings as $tracking)
                                <div class="card-body">
                                    <span class="badge text-secondary">
                                        <i class="bi bi-calendar-fill me-2"></i> {{ $tracking->date }}
                                    </span><br>
                                    <span class="badge text-secondary">
                                        <i class="bi bi-geo-alt-fill me-2"></i> {{ $tracking->keterangan }}
                                    </span><br>
                                    <span class="badge text-secondary mb-3">
                                        <i class="bi bi-box-fill me-2"></i> {{ $tracking->deskripsi }}
                                    </span>
                                    
                                   
                                
                                    
                                    <div class="d-flex justify-content-end mt-2">
                                        <form action="{{ route('delete', $tracking->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger btn-sm" type="submit">
                                                <i class="bi bi-trash3-fill"></i> Hapus
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            @endforeach
                            
                            
                            </div>
                        </div>


                        <form action="{{ route('tracking', ['id' => $barang->id]) }}" method="GET">
                            @csrf
                            <button type="submit" class="btn btn-success mb-2">Tambah Tracking</button>
                        </form>

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
