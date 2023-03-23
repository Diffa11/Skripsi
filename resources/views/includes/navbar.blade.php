<nav class="navbar navbar-expand-lg bg-white sticky-top">
        <div class="container-fluid container my-0">
            <a class="navbar-brand" href="{{ route('home') }}">
                <img src="assets/logo.png" alt="home" width="160" height="40" class="img-fluid">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('alur') }}">Alur Pembelajaran</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('program') }}">Program</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('tentang') }}">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Kontak Kami</a>
                    </li>
                </ul>

                @guest
                    <form class="d-flex" role="login">
                        <a class="btn btn-prim me-4" type="submit" href="{{ route('login') }}">Login</a>
                    </form>
                    <form class="d-flex" role="register">
                        <a class="btn btn-sec" type="submit" href="{{ route('register') }}">Register</a>
                    </form>
                @endguest

                @auth
                    <a class="navbar-brand" href="{{ route('profil') }}">
                        <img src="assets/avatar.png" alt="home" width="50" height="50" class="img-fluid img-profil">
                    </a>
                @endauth

            </div>
        </div>
</nav>