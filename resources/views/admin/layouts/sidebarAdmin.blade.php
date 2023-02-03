<aside class="main-sidebar sidebar-dark-secondary elevation-3">
    <!-- Brand Logo -->
    <a href="{{ route('dashboard') }}" class="brand-link text-center">
        <i class="bi bi-houses-fill"></i>
        <span class="brand-text font-weight-light">Restoran</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                {{-- Dashboard --}}
                <li class="nav-item mb-3">
                    <a href="{{ route('dashboard') }}"
                        class="nav-link {{ request()->is('Dashboard') ? 'active' : '' }}">
                        <i class="nav-icon fas bi bi-speedometer2"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                {{-- Kasir --}}
                <li class="nav-header">Kasir</li>
                <li class="nav-item mb-3">
                    <a href="{{ route('indexDataKasir') }}"
                        class="nav-link {{ request()->is('indexDataKasir') ? 'active' : '' }}">
                        <i class="nav-icon fas bi bi-people"></i>
                        <p>
                            Data Kasir
                        </p>
                    </a>
                </li>
                {{-- Menu --}}
                <li class="nav-header">Menu</li>
                <li class="nav-item mb-3">
                    <a href="{{ route('indexDataMakanan') }}"
                        class="nav-link  {{ request()->is('DataMakanan', 'FormDataMakananBaru', 'DetailDataMakanan*', 'FormEditDataMakanan*') ? 'active' : '' }}">
                        <i class="nav-icon fas bi bi-egg-fried"></i>
                        <p>
                            Data Makanan
                        </p>
                    </a>
                </li>
                <li class="nav-item mb-3">
                    <a href="{{ route('indexDataMinuman') }}"
                        class="nav-link {{ request()->is('DataMinuman', 'FormDataMinumanBaru', 'DetailDataMinuman*', 'FormEditDataMinuman*') ? 'active' : '' }}">
                        <i class="nav-icon fas bi bi-cup-straw"></i>
                        <p>
                            Data Minuman
                        </p>
                    </a>
                </li>
                {{-- Laporan --}}
                <li class="nav-header">Laporan</li>
                <li class="nav-item mb-3">
                    <a href="/readDataLaporan" class="nav-link {{ request()->is('readDataLaporan') ? 'active' : '' }}">
                        <i class="nav-icon fas bi bi-clipboard2"></i>
                        <p>
                            Data Laporan
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
