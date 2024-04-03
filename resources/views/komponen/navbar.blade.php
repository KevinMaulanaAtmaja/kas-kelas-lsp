<nav class="navbar navbar-expand-lg bg-info bg-opacity-50 ">
    <div class="container">
        <a class="navbar-brand" href="/siswa">KasKelas</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/siswa">Siswa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('pembayaran.index') }}">Pembayaran</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
