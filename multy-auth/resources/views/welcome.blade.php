<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Home</title>
    <!-- Link ke CSS Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Link ke AOS CSS -->
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    @include('user.style.gaya')
</head>

<body class="accent-background">
    <main class="main">
        <!-- Hero Section -->
        <section class="hero section">
            <div class="container-md position-relative" data-aos="fade-up" data-aos-delay="100">
                <div class="row gy-5 justify-content-between">
                    <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
                        <h2><span>Selamat Datang di </span><span class="accent">APL Tracker</span></h2>
                        <p>APL Tracker adalah aplikasi yang dirancang khusus untuk membantu jurusan APL
                            dalam memantau dan mengelola berbagai aktivitas pengujian zat. Aplikasi ini memastikan bahwa
                            Anda selalu mendapatkan informasi terbaru tentang status dan perkembangan setiap
                            kegiatan yang dipantau. Dengan APL Tracker, pengujian menjadi lebih mudah
                            dan efisien, sehingga semua proses dapat berlangsung dengan lancar dan terstruktur.</p>    
                    </div>

                    <!-- Kolom untuk tombol Login dan Register -->
                    <div class="col-lg-5 order-1 order-lg-2 d-flex flex-column">
                        <h5 class=" accent fw-bold text-center">Silahkan Login</h5>
                        <div class="d-flex flex-column">
                            @if (Route::has('login'))
                                 @auth
                                    {{-- <a href="{{ url('/dashboard') }}" class="">Dashboard</a> 
                                @else --}}
                                    <a href="{{ route('login') }}" class="btn btn-info text-white mb-3">Login</a>
                                @endauth
                            @endif
                        </div>

                        <h5  class=" accent fw-bold text-center">Belum punya akun ? Daftar</h5>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn btn-outline-info text-white">Daftar</a>
                        @endif
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- JS dan Bootstrap 5 (Bundle termasuk Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- JS untuk AOS -->
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>

    <script>
        // Inisialisasi AOS
        AOS.init();
    </script>
</body>

</html>
