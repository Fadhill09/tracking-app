<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Tentang Kami</title>
    <meta name="description" content="Informasi tentang visi, misi, dan anggota tim kami.">
    <meta name="keywords" content="tentang, visi, misi, anggota, tim, tracking, APL">

    @include('user.style.gaya')
</head>

<body class="index-page">

    @include('user.operasi.navbar')

    <main class="main">

        <!-- About Section -->
        <section id="tentang" class="section">

            <!-- Section Title -->
            <div class="container text-center p-5" data-aos="fade-up">
                <h2 class="fw-bold">Tentang Kami</h2>
                <p class="text-muted">Aplikasi pelacakan APL untuk mempermudah manajemen dan efisiensi.</p>
            </div><!-- End Section Title -->

            <div class="container-md">
                <div class="row gy-5">
                    <div class="col-lg-6" data-aos="fade-right">
                        <h3 class="fw-bold text-center mb-4">Visi</h3>
                        <p class="text-justify">
                            Menjadi solusi utama dalam manajemen pelacakan APL dengan memberikan kemudahan,
                            transparansi, dan keakuratan dalam setiap proses yang dilakukan.
                        </p>
                        <p class="text-justify">
                            Membantu pengguna dalam mengelola data pelacakan secara efisien melalui platform yang
                            andal dan mudah digunakan.
                        </p>
                    </div>
                    <div class="col-lg-6" data-aos="fade-left">
                        <h3 class="fw-bold text-center mb-4">Misi</h3>
                        <ul class="list-unstyled">
                            <li class="mb-2"><i class="bi bi-check-circle-fill me-2"></i> Mengintegrasikan teknologi
                                modern untuk meningkatkan akurasi dan efisiensi pelacakan.</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill me-2"></i> Menyediakan antarmuka yang
                                ramah pengguna untuk semua kalangan.</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill me-2"></i> Mendukung pengguna dalam
                                membuat keputusan berbasis data dengan laporan yang informatif.</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Team Section -->
            <div class="container text-center mt-5" data-aos="fade-up">
                <h2 class="fw-bold">Anggota</h2>
                <p class="text-muted">Tim di balik aplikasi tracking APL.</p>
            </div>
            <div class="container-md">
                <div class="row gy-4">
                    <div class="col-md-4">
                        <div class="card shadow border-0 m-2" data-aos="zoom-in" data-aos-delay="100">
                            <a href="https://www.instagram.com/nawall07_/" class="card-body text-decoration-none">
                                <h4 class="fw-bold text-center">Nawal Fadhilah Ramadhan</h4>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card shadow border-0 m-2" data-aos="zoom-in" data-aos-delay="200">
                            <a href="https://www.instagram.com/ahea4r/" class="card-body text-decoration-none">
                                <h4 class="fw-bold text-center">Alif Ghea Yanuar</h4>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card shadow border-0 m-2" data-aos="zoom-in" data-aos-delay="300">
                            <a href="https://www.instagram.com/rahawaeh_113/" class="card-body text-decoration-none">
                                <h4 class="fw-bold text-center">Zein Ishaq Rahawaeh</h4>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- /About Section -->

    </main>

    @include('user.operasi.footer')

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center bg-dark rounded-circle shadow">
        <i class="bi bi-arrow-up-short text-white"></i>
    </a>

    <!-- Preloader -->
    <div id="preloader" class="d-flex justify-content-center align-items-center">
        <div class="spinner-border text-dark" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>

    <!-- Vendor JS Files -->
    @include('user.style.gaya')

</body>

</html>
