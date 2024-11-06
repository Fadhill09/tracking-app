<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Beranda</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    @include('style.gaya')

    <!-- =======================================================
  * Template Name: Impact
  * Template URL: https://bootstrapmade.com/impact-bootstrap-business-website-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

    @include('operasi.navbar')

    <main class="main">

        <!-- Hero Section -->
        <section id="" class="hero section accent-background">

            <div class="container-md position-relative" data-aos="fade-up" data-aos-delay="100">
                <div class="row gy-5 justify-content-between">
                    <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
                        <h2><span>Selamat Datang Di </span><span class="accent">TrackMate</span></h2>
                        <p>TrackMate adalah aplikasi pelacakan barang yang dirancang untuk menjadi mitra Anda dalam
                            mengawasi setiap langkah perjalanan barang. TrackMate memastikan Anda selalu mendapatkan
                            informasi terbaru tentang status pengiriman barang Anda. Dengan TrackMate, Anda dapat dengan
                            mudah mengelola pengiriman Anda, sehingga tidak ada lagi kekhawatiran tentang kehilangan
                            atau keterlambatan barang.</p>
                    </div>
                    <div class="col-lg-5 order-1 order-lg-2">
                        <img src="{{ asset ('template/assets/img/hero-img.svg') }}" class="img-fluid" alt="">
                    </div>
                </div>
            </div>

            <div class="icon-boxes position-relative bg-white" data-aos="fade-up" data-aos-delay="200">
                <div class="container position-relative ">
                    <div class="row gy-4 mt-5">

                        <div class="col-xl-3 col-md-6">
                            <div class="icon-box">
                                <div class="icon"><i class="bi bi-hand-thumbs-up"></i></div>
                                <h4 class="title">Terpercaya</h4>
                            </div>
                        </div><!--End Icon Box -->

                        <div class="col-xl-3 col-md-6">
                            <div class="icon-box">
                                <div class="icon"><i class="bi bi-stopwatch"></i></div>
                                <h4 class="title">Tepat Waktu</h4>
                            </div>
                        </div><!--End Icon Box -->

                        <div class="col-xl-3 col-md-6">
                            <div class="icon-box">
                                <div class="icon"><i class="bi bi-geo-alt"></i></div>
                                <h4 class="title">Sesuai Alamat</h4>
                            </div>

                        </div><!--End Icon Box -->
                        <div class="col-xl-3 col-md-6">
                            <div class="icon-box">
                                <div class="icon"><i class="bi bi-geo-alt"></i></div>
                                <h4 class="title">isi sendiri</h4>
                            </div>
                        </div><!--End Icon Box -->
                    </div>
                </div>
            </div>

        </section><!-- /Hero Section -->


    </main>

    @include('operasi.footer')

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    @include('style.gaya')

</body>

</html>
