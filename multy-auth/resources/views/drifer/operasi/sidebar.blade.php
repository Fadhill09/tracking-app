<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="/">
          <i class="bi bi-grid"></i>
          <span>Beranda</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Data User</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('tampil.operator') }}">
              <i class="ri-customer-service-2-line fs-3"></i><span>Operator</span>
            </a>
          </li>
          <li>
            <a href="{{ route('tampil.operator') }}">
              <i class="ri-nurse-fill fs-3"></i><span>Driver</span>
            </a>
          </li>
        </ul>
      </li><!-- End Components Nav -->




    </ul>

  </aside>
