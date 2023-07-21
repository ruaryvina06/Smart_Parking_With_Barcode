<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <div class="d-flex justify-content-between">
                <div class="logo">
                    <a href="index.html"><img src="{{ asset('admin/assets/images/logo/logo.png') }}" alt="Logo"
                            srcset=""></a>
                </div>
                <div class="toggler">
                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-title">Menu</li>

                <li class="sidebar-item {{ Nav::isRoute('dashboard') }}">
                    <a href="{{ route('dashboard') }}" class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="sidebar-item {{ Nav::isRoute('bayar') }}">
                    <a href="{{ route('bayar') }}" class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Bayar Parkir</span>
                    </a>
                </li>
                <li class="sidebar-item {{ Nav::isRoute('parkir') }}">
                    <a href="{{ route('parkir') }}" class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Data Parkir</span>
                    </a>
                </li>
                <li class="sidebar-item {{ Nav::isRoute('tempat') }}">
                    <a href="{{ route('tempat') }}" class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Kode Lokasi</span>
                    </a>
                </li>
                <li class="sidebar-item {{ Nav::isRoute('kendaraan') }}">
                    <a href="{{ route('kendaraan') }}" class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Kendaraan</span>
                    </a>
                </li>
                <li class="sidebar-item ">
                    <a href="{{ route('logout') }}" class='sidebar-link'
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="bi bi-grid-fill"></i>
                        <span>Logout</span>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>

            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>
