<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="/">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link @yield('home')" href="/">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle @yield('kategori')" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Artikel
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        @foreach ($kategori as $row)
                            <a class="dropdown-item" href="/artikel-kategori/{{$row->slug}}">{{$row->nama}}</a>
                        @endforeach
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/">Adopsi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/">Penitipan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/">Konsultasi</a>
                </li>
            </ul>
            
        </div>
    </div>
</nav>

