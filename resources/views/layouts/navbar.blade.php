<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
<header data-bs-theme="dark">
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="container-fluid">
            <div>
                <a class="navbar-brand" href="{{ route('beranda') }}">
                    <img src="{{ asset('img/Logo.png') }}" alt="" width="75px" style="margin-right: 12px">
                    Laser Cutting Poliban
                </a>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="d-flex" class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item me-5">
                        <a class="nav-link @yield('beranda-classes')" aria-current="page" href="{{ route('beranda') }}"
                            style="font-size: 20px;">Beranda</a>
                    </li>
                    <li class="nav-item me-5">
                        <a class="nav-link @yield('tentang-kami-classes')" href="{{ route('tentang-kami') }}"
                            style="font-size: 20px;">Tentang kami</a>
                    </li>
                    <li class="nav-item me-5">
                        <a class="nav-link @yield('kontak-classes')" href="{{ route('kontak') }}"
                            style="font-size: 20px;">Kontak</a>
                    </li>
                    <li class="nav-item me-5">
                        <a class="nav-link @yield('login-classes')" href="{{ route('login') }}"
                            style="font-size: 20px;">@yield('login-logout')</a>
                    </li>
                    <li class="nav-item me-5">
                        <a href="#">

                            <i class="bi bi-person h3" style="color: white"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        </div>
    </nav>
</header>
