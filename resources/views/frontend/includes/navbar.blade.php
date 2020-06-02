<nav class="navbar navbar-expand-lg fixed-top navbar-custom sticky sticky-dark shadow">
    <div class="container-fluid">
        <!-- LOGO -->
        <a class="logo text-uppercase" href="{{ URL('/') }}">
            {{-- <img src="{{ url('/') }}/frontend/assets/images/logo-light.png" alt="" class="logo-light" height="21" />
            <img src="{{ url('/') }}/frontend/assets/images/logo-dark.png" alt="" class="logo-dark" height="21" /> --}}
            <h3>SORAYA</h3>
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <i class="mdi mdi-menu"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav ml-auto navbar-center" id="mySidenav">
                <li class="nav-item active">
                    <a href="{{ url('/') }}" class="nav-link">Beranda</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('produk.index') }}" class="nav-link">Produk</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('proyek.index') }}" class="nav-link">Proyek</a>
                </li>
                <li class="nav-item">
                    <a href="#pricing" class="nav-link">Berita</a>
                </li>
                <li class="nav-item">
                    <a href="#faq" class="nav-link">Tentang Kami</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('contact-us.index') }}" class="nav-link">Hubungan Kami</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
