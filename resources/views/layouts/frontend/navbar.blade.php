<nav class="navbar navbar-expand-lg fixed-top" style="background-color:green !important">
        <div class="container-fluid">
        <a class="navbar-brand" href="#">
      <img src="/docs/5.3/assets/brand/bootstrap-logo.svg" width="30" height="24">
        </a>
            <a class="navbar-brand" href="{{route('home')}}">Beranda</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Profile
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{route('structure')}}">Struktur Organisasi</a></li>
                    <li><a class="dropdown-item" href="{{route('visimisi')}}">Visi Misi</a></li>
                
                </ul>
                </li>
                <li class="nav-item">
                <a class="nav-link active" aria-current href="{{route('layanan')}}">Layanan</a>
                </li>

                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Informasi
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{route('informasisetiapsaat')}}">Informasi Setiap Saat</a></li>
                    <li><a class="dropdown-item" href="{{route('informasiberkala')}}">Informasi Secara Berkala </a></li>
                
                </ul>
                </li>
                <li class="nav-item">
                <a class="nav-link disabled">Pengaduan</a>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            </div>
        </div>
        </nav>