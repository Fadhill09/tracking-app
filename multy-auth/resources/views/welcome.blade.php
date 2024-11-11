<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Beranda</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    @include('user.style.gaya')

</head>

<body class="index-page">


    <main class="main">

        <!-- Hero Section -->
        <section id="" class="hero section accent-background">


            <div class="container-md position-relative" data-aos="fade-up" data-aos-delay="100">
                <div class="row gy-5 justify-content-between">
                    <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
                        <h2><span>Selamat Datang di </span><span class="accent">APL Tracker</span></h2>
                        <p>APL Tracker adalah aplikasi pelacakan yang dirancang khusus untuk membantu jurusan APL
                            dalam memantau dan mengelola berbagai aktivitas pelacakan. Aplikasi ini memastikan bahwa
                            Anda selalu mendapatkan informasi terbaru tentang status dan perkembangan setiap
                            kegiatan yang dipantau. Dengan APL Tracker, pengelolaan pelacakan menjadi lebih mudah
                            dan efisien, sehingga semua proses dapat berlangsung dengan lancar dan terstruktur.</p>

                    </div>
                    <div class="col-lg-5 order-1 order-lg-2">
                        <img src="{{ asset('template/assets/img/hero-img.svg') }}" class="img-fluid" alt="">
                    </div>
                </div>
            </div>

            @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/dashboard') }}"
                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                            Dashboard
                        </a>
                    @else
                        <a href="{{ route('login') }}"
                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                            Log in
                        </a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"
                                class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                                Register
                            </a>
                        @endif
                    @endauth
            @endif

        </section>


    </main>

    @include('user.operasi.footer')

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    @include('user.style.gaya')

</body>

</html>
