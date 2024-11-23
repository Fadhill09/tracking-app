<header id="header" class="header fixed-top">
    <div class="branding d-flex align-items-cente">

        <div class="container position-relative d-flex align-items-center justify-content-between">
            <a href="index.html" class="logo d-flex align-items-center">

                <h1 class="sitename">TrackMate</h1>
                <span>.</span>
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>

                    <li><a href="{{ route('tentang') }}">Tentang</a></li>

                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a class="dropdown-item d-flex align-items-center" href="route('logout')"
                                onclick="event.preventDefault();
                                    this.closest('form').submit();">
                                
                                <span>Sign Out</span>
                            </a>
                        </form>
                    </li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

        </div>

    </div>

</header>
