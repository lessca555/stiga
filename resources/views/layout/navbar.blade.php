<nav class="navbar navbar-expand-md sticky-top">
    <div class="container-fluid nav">

        <div class="logo">
            <a class="navbar-brand" href="{{ route('home') }}">
                <img src="{{ url('assets/img/logo.png') }}" alt="">
            </a>
        </div>

        <div class="content-normal">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

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

    </div>
</nav>
