<header id="header" class="header fixed-top">
    <div class="branding d-flex align-items-cente">

      <div class="container position-relative d-flex align-items-center justify-content-between">
        <a href="index.html" class="logo d-flex align-items-center">
          <!-- Uncomment the line below if you also wish to use an image logo -->
          <!-- <img src="assets/img/logo.png" alt=""> -->
          <h1 class="sitename">TrackMate</h1>
          <span>.</span>
        </a>

        <nav id="navmenu" class="navmenu">
          <ul>
            <li><a href="{{ route ('dasboard') }}" >Beranda</a></li>
            {{-- <li><a href="{{ route ('berita')}}">Berita</a></li> --}}
            <li class="dropdown"><a href="#"><span>Layanan</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
              <ul>
                <li><a href="{{ route('create')}}">Kirim Barang</a></li>
                <li><a href="{{ route('kirim') }}">Cek Barang</a></li>
              </ul>
            </li>
            <li><a href="{{ route ('tentang')}}">Tentang</a></li>

            {{-- <li><a href="#">-</a></li>
            <li><a href="#">Daft</a></li> --}}
          </ul>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

      </div>

    </div>

  </header>
