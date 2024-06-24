<header class="header-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1 col-md-12 col-sm-9">
                <div class="navbar-area text-center">
                    <nav class="site-navbar">
                        <ul>
                            <li><a href="{{ route('content.index') }}">Chiro Care</a></li>
                            <li><a class="" href="{{ route('content.index') }}">Informasi</a></li>
                            <li><a href="{{ route('content.layanan') }}">Layanan Kami</a></li>
                            <li><a href="{{ route('content.riwayat') }}">Riwayat Layanan</a></li>

                            @if (Auth::check())
                                <li><a href="{{ route('auth.logout') }}">Keluar</a></li>
                            @else
                                <li><a href="{{ route('auth.login') }}">Masuk</a></li>
                            @endif
                        </ul>
                        <button class="nav-toggler">
                            <span></span>
                        </button>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
