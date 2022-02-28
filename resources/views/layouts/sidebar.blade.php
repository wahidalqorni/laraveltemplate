<div class="main-sidebar">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <div class="mb-4 p-3 hide-sidebar-mini">
          <a href="{{ url('dashboard') }}" class="btn btn-lg btn-block" style="
            border: none;
            background-size: cover;
            background-image: url({{ asset('back_theme/background-modal.jpg') }})">
            <img class="mb-1" src="{{ asset('logo.png') }}" width="100%" alt="">
            <span style="color: black; font-size: 20px;"> SIKEPALA </span>
          </a>
        </div>
      </div>
      <div class="sidebar-brand sidebar-brand-sm">
        <img class="mb-1" src="{{ asset('logo.png') }}" width="100%" alt="">
      </div>
      <ul class="sidebar-menu mt-4">
        <li class="nav-item @stack('active-dashboard')">
          <a href="{{ url('/home') }}" class="nav-link">
            <i class="fas fa-home"></i>
            <span>Dashboard</span>
          </a>
        </li>
        <li class="nav-item dropdown @stack('active-master')">
          <a href="#" class="nav-link has-dropdown">
            <i class="fas fa-th-large"></i>
            <span>Master</span>
          </a>
          <ul class="dropdown-menu">
            <li class="@stack('active-user')"><a class="nav-link" href="{{ route('user') }}">Users</a>
            </li>
            <li class="@stack('active-unsur')"><a href="#" class="nav-link">Unsur</a></li>
            <li class="@stack('active-responden')"><a href="#" class="nav-link"
                href="responden.html">Responden</a></li>
            <li class="@stack('active-r_table')"><a href="#" class="nav-link"
                href="index.html">R Tabel</a></li>
          </ul>
        </li>
       
      </ul>
    </aside>
  </div>