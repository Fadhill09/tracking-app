<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    @include('user.style.gaya')


</head>

<body class="accent-background">
    <main class="main">
        <section class="hero section">
            <div class="container-md position-relative" data-aos="fade-up" data-aos-delay="100">
                <div class="row gy-5 justify-content-between">
                    <div class="col-lg-6  justify-content-center">
                        <h2><span>Selamat Datang di </span><span class="accent">APL Tracker</span></h2>
                        <p>APL Tracker adalah aplikasi yang dirancang khusus untuk membantu jurusan APL
                            dalam memantau dan mengelola berbagai aktivitas pengujian zat. Aplikasi ini memastikan bahwa
                            Anda selalu mendapatkan informasi terbaru tentang status dan perkembangan setiap
                            kegiatan yang dipantau. Dengan APL Tracker, pengujian menjadi lebih mudah
                            dan efisien, sehingga semua proses dapat berlangsung dengan lancar dan terstruktur.</p>
                    </div>


                    <div class="col-lg-5 d-flex flex-column p-5">
                        <h5 class=" accent fw-bold text-center">Silahkan Login</h5>
                        <div class="d-flex flex-column ">
                            @if (Route::has('login'))
                                @auth
                                    <a href="{{ url('/dashboard') }}" class="btn btn-info text-white mb-3">Dashboard</a>
                                @else
                                    <a href="{{ route('login') }}" class="btn btn-info text-white mb-3">Login</a>
                                @endauth
                            @endif
                        </div>

                        {{-- <h5 class=" accent fw-bold text-center">Belum punya akun ? Daftar</h5>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn btn-outline-info text-white mb-5">Daftar</a>
                        @endif --}}
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer id="footer" class="footer accent-background">

        <div class="container copyright text-center mt-4">
            <p>© <span>Copyright</span> <strong class="px-1 sitename">Smks Al-ittihad</strong> <span>All Rights
                    Reserved</span></p>
            <div class="credits">
                Designed by <a href="#">Tefatie</a>
            </div>
        </div>

    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>

    <script>
        AOS.init();
    </script>
</body>

</html>
