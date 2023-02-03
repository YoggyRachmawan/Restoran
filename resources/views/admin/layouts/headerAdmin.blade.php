<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>
    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <img src="{{ asset('img/Yoggy.jpg') }}" class="img-circle" width="25">
            </a>
            <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                <span class="dropdown-header">Admin | Yoggy Rachmawan</span>
                <div class="dropdown-divider"></div>
                <a href="/readProfilAdmin"
                    class="dropdown-item {{ request()->is('readProfilAdmin', 'updateProfilAdmin') ? 'active' : '' }}">
                    <i class="bi bi-person-lines-fill"></i> Profil saya
                </a>
                <div class="dropdown-divider"></div>
                <a href="/passwordAdmin" class="dropdown-item {{ request()->is('passwordAdmin') ? 'active' : '' }}">
                    <i class="bi bi-file-lock-fill"></i> Ganti password
                </a>
                <div class="dropdown-divider"></div>
                <a href="{{ route('keluar') }}" class="dropdown-item">
                    <i class="bi bi-door-open-fill"></i> Keluar
                </a>
            </div>
        </li>
    </ul>
</nav>
