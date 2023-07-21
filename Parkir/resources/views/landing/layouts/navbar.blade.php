<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top py-0 pe-5">
    <a href="index.html" class="navbar-brand ps-5 me-0">
        <h1 class="text-white m-0">Find Parking Load</h1>
    </a>
    <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="{{ route('multi-user') }}" class="nav-item nav-link {{ Nav::isRoute('multi-user') }}">Beranda</a>
            <a href="{{ route('vehicle') }}" class="nav-item nav-link {{ Nav::isRoute('vehicle') }}">Kendaraan</a>
            <a href="{{ route('lokasi') }}" class="nav-item nav-link {{ Nav::isRoute('lokasi') }}">Lokasi</a>
            @auth
                <a href="{{ route('pembayaran') }}"
                    class="nav-item nav-link {{ Nav::isRoute('pembayaran') }}">Pembayaran</a>
            @endauth
        </div>
        @guest
            <a href="{{ route('login') }}" class="btn btn-primary px-3 d-none d-lg-block">Masuk</a>
        @else
            <a href="{{ route('logout') }}" class="btn btn-primary px-3 d-none d-lg-block"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Keluar</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        @endguest
    </div>
</nav>
<!-- Navbar End -->
