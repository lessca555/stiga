<nav class="navbar navbar-expand-md sticky-top">
    <div class="container-fluid nav">

        <div class="logo">
            <a class="navbar-brand" href="{{ route('home') }}">
                <img src="{{ url('assets/img/logo.png') }}" alt="">
            </a>
        </div>

        <div class="content-normal">

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                    </li>
                    <div class="nav-item dropdown">
                        <a class="nav-link dropbtn">Profile</a>
                        <div class="dropdown-content">
                          <a href="{{ route('visim') }}">Visi-misi</a>
                          <a href="{{ route('struktur') }}">Struktur Organisasi</a>
                          <a href="{{ route('fasilitas') }}">Fasilitas Sekolah</a>
                          <a href="#">Data GTK</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a class="nav-link dropbtn">Kompetensi Keahilan</a>
                        <div class="dropdown-content">
                          <a href="{{ route('jur_bkp') }}">Bisnis konstruksi dan property(BKP)</a>
                          <a href="{{ route('jur_pdib') }}">Desain permodelan dan Informasi bangunan(DPIB)</a>
                          <a href="{{ route('jur_tav') }}">Teknik audio visual(TAV)</a>
                          <a href="{{ route('jur_titl') }}">Teknik instalasi tenaga listrik(TITL)</a>
                          <a href="{{ route('jur_tkro') }}">Teknik kendaraan ringan otomotif(TKRO)</a>
                          <a href="{{ route('jur_tpm') }}">Teknik permesinan(TPM)</a>
                          <a href="{{ route('jur_mm') }}">Multimedia(MM)</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a class="nav-link dropbtn">Galery</a>
                        <div class="dropdown-content">
                          <a href="{{ route('gal_down') }}">Download</a>
                          <a href="{{ route('gal_vid') }}">Video</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a class="nav-link dropbtn">Program sekolah</a>
                        <div class="dropdown-content">
                          <a href="{{ route('ps_ekskul') }}">Ekstrakurikuler</a>
                          <a href="{{ route('ps_agenda') }}">Agenda</a>
                          <a href="https://bkk.smkn3-sby.sch.id/">Bursa kerja khusus</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a class="nav-link dropbtn">PPDB 2023</a>
                        <div class="dropdown-content">
                          <a href="{{ route('ppdb_stiga') }}">PPDB SMK NEGRI 3 SURABAYA 2022/2023</a>
                          <a href="https://ppdbjatim.net/">ppdbjatim.net</a>
                        </div>
                    </div>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('notif') }}">Pengumuman</a>
                    </li>
                </ul>
            </div>
        </div>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#resp" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

    </div>

    <div class="content-resp w-100">

        <div class="collapse navbar-collapse" id="resp">
            <ul class="navbar-nav h-100">
                <li class="nav-item">
                    <a class="nav-link activeResp" aria-current="page" href="{{ route('home') }}">Home</a>
                </li>

                {{-- Profile --}}
                <li class="nav-item">
                    <a class="nav-link" type="button" data-bs-toggle="offcanvas" data-bs-target="#profile" aria-controls="offcanvasExample">
                        Profile
                    </a>
                </li>

                <div class="offcanvas offcanvas-start w-100" tabindex="-1" id="profile" aria-labelledby="offcanvasExampleLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasExampleLabel">Offcanvas</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>

                    <div class="offcanvas-body">
                        <a class="nav-link" href="{{ route('visim') }}">Visi-misi</a>
                        <a class="nav-link" href="{{ route('struktur') }}">Struktur Organisasi</a>
                        <a class="nav-link" href="{{ route('fasilitas') }}">Fasilitas Sekolah</a>
                        <a class="nav-link" href="#">Data GTK</a>
                    </div>
                </div>

                {{-- Kompetensi Keahlian --}}
                <li class="nav-item">
                    <a class="nav-link" type="button" data-bs-toggle="offcanvas" data-bs-target="#kompetensi" aria-controls="offcanvasExample">
                        Kompetensi Keahilan
                    </a>
                </li>

                <div class="offcanvas offcanvas-start w-100" tabindex="-1" id="kompetensi" aria-labelledby="offcanvasExampleLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasExampleLabel">Offcanvas</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>

                    <div class="offcanvas-body">
                        <a class="nav-link" href="{{ route('jur_bkp') }}">Bisnis konstruksi dan property(BKP)</a>
                        <a class="nav-link" href="{{ route('jur_pdib') }}">Desain permodelan dan Informasi bangunan(DPIB)</a>
                        <a class="nav-link" href="{{ route('jur_tav') }}">Teknik audio visual(TAV)</a>
                        <a class="nav-link" href="{{ route('jur_titl') }}">Teknik instalasi tenaga listrik(TITL)</a>
                        <a class="nav-link" href="{{ route('jur_tkro') }}">Teknik kendaraan ringan otomotif(TKRO)</a>
                        <a class="nav-link" href="{{ route('jur_tpm') }}">Teknik permesinan(TPM)</a>
                        <a class="nav-link" href="{{ route('jur_mm') }}">Multimedia(MM)</a>
                    </div>
                </div>

                {{-- Gallery --}}
                <li class="nav-item">
                    <a class="nav-link" type="button" data-bs-toggle="offcanvas" data-bs-target="#gallery" aria-controls="offcanvasExample">
                        Galery
                    </a>
                </li>

                <div class="offcanvas offcanvas-start w-100" tabindex="-1" id="gallery" aria-labelledby="offcanvasExampleLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasExampleLabel">Offcanvas</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>

                    <div class="offcanvas-body">
                        <a class="nav-link" href="{{ route('gal_down') }}">Download</a>
                        <a class="nav-link" href="{{ route('gal_vid') }}">Video</a>
                    </div>
                </div>

                {{-- Program sekolah --}}
                <li class="nav-item">
                    <a class="nav-link" type="button" data-bs-toggle="offcanvas" data-bs-target="#schoolprog" aria-controls="offcanvasExample">
                        Program Sekolah
                    </a>
                </li>

                <div class="offcanvas offcanvas-start w-100" tabindex="-1" id="schoolprog" aria-labelledby="offcanvasExampleLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasExampleLabel">Offcanvas</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>

                    <div class="offcanvas-body">
                        <a class="nav-link" href="{{ route('ps_ekskul') }}">Ekstrakurikuler</a>
                        <a class="nav-link" href="{{ route('ps_agenda') }}">Agenda</a>
                        <a class="nav-link" href="https://bkk.smkn3-sby.sch.id/">Bursa kerja khusus</a>
                    </div>
                </div>

                {{-- PPDB --}}
                <li class="nav-item">
                    <a class="nav-link" type="button" data-bs-toggle="offcanvas" data-bs-target="#schoolprog" aria-controls="offcanvasExample">
                        PPDB 2023
                    </a>
                </li>

                <div class="offcanvas offcanvas-start w-100" tabindex="-1" id="schoolprog" aria-labelledby="offcanvasExampleLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasExampleLabel">Offcanvas</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>

                    <div class="offcanvas-body">
                        <a class="nav-link" href="{{ route('ppdb_stiga') }}">PPDB SMK NEGRI 3 SURABAYA 2022/2023</a>
                        <a class="nav-link" href="https://ppdbjatim.net/">ppdbjatim.net</a>
                    </div>
                </div>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('notif') }}">Pengumuman</a>
                </li>

            </ul>
        </div>
    </div>
</nav>
