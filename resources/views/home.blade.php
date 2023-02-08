@extends('layout.app')
@section('title', 'SMK Negri 3 Surabaya')

@section('content')

<div class="container-home">
    <div class="satu">
        <div class="kiri">
            <div class="title">
                <h1>Selamat datang
                di halaman website
                SMK NEGRI 3 Surabaya</h1>
            </div>

            <div class="body">
                <p>
                    Kami adalah SMK Negri yang berlokasi di Jl.
                    Ahmad Yani No.319, Dukuh Menanggal, Kec. Gayungan, Kota SBY, Jawa Timur 60234.
                    Daftarkan putra-putri anda kemari dan akan kami didik hingga baik secara akademis dan moral.
                </p>
            </div>
            <a href="#" class="btn btn-dark">Contact us</a>
        </div>

        <div class="kanan">
            <img src="{{ url('assets/img/slider/slide2.jpeg') }}" alt="">
        </div>

    </div>

    <div class="dua">
        <div class="kiri pb-3">
            <div class="title">
                <div class="line"></div>
                <h1>GALERY KEGIATAN SMK NEGRI 3 SURABAYA</h1>
            </div>

            <div class="body">
                <div class="galery row col-md-12" id="galery">

                    <div class="col-md-4">
                        <div class="card">
                            <img src="{{ url('assets/img/agenda_kegiatan/kegiatan1.jpeg') }}" alt="">
                            <div class="overlay">
                                <div class="text">
                                    <p>Tanggal</p>
                                    <div class="line"></div>
                                    <p>Kegiatan</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card">
                            <img src="{{ url('assets/img/agenda_kegiatan/kegiatan2.jpeg') }}" alt="">
                            <div class="overlay">
                                <div class="text">
                                    <p>Tanggal</p>
                                    <div class="line"></div>
                                    <p>Kegiatan</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card">
                            <img src="{{ url('assets/img/agenda_kegiatan/kegiatan3.jpeg') }}" alt="">
                            <div class="overlay">
                                <div class="text">
                                    <p>Tanggal</p>
                                    <div class="line"></div>
                                    <p>Kegiatan</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 pt-3">
                        <div class="card">
                           <img src="{{ url('assets/img/agenda_kegiatan/kegiatan4.jpeg') }}" alt="">
                            <div class="overlay">
                                <div class="text">
                                    <p>Tanggal</p>
                                    <div class="line"></div>
                                    <p>Kegiatan</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 pt-3">
                        <div class="card">
                            <img src="{{ url('assets/img/agenda_kegiatan/kegiatan5.jpeg') }}" alt="">
                            <div class="overlay">
                                <div class="text">
                                    <p>Tanggal</p>
                                    <div class="line"></div>
                                    <p>Kegiatan</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 pt-3">
                        <div class="card">
                           <img src="{{ url('assets/img/agenda_kegiatan/kegiatan6.jpeg') }}" alt="">
                            <div class="overlay">
                                <div class="text">
                                    <p>Tanggal</p>
                                    <div class="line"></div>
                                    <p>Kegiatan</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <a href="#" class="btn btn-dark">Lihat lebih banyak <i class="fa-solid fa-angles-right"></i></a>
    </div>

    <div class="tiga">
        <div class="title">
            <div class="line"></div>
            <h1>Berita acara</h1>
        </div>
        <div class="body">
            <div class="berita row col-md-12">

                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ url('assets/img/berita/brt.jpeg') }}" alt="">
                        <div class="overlay">
                            <div class="text">
                                <span class="tanggal">tanggal</span>
                                <a class="berita" href="#">berita</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ url('assets/img/berita/brt1.jpeg') }}" alt="">
                        <div class="overlay">
                            <div class="text">
                                <span class="tanggal">tanggal</span>
                                <a class="berita" href="#">berita</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ url('assets/img/berita/brt2.jpeg') }}" alt="">
                        <div class="overlay">
                            <div class="text">
                                <span class="tanggal">tanggal</span>
                                <a class="berita" href="#">berita</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="empat">
        <div class="kiri">
            <div class="title">
                <div class="line"></div>
                <h1>Pengumuman</h1>
            </div>

            <div class="body">
                <div class="pengumuman">
                    <div class="card">
                        <img src="{{ url('assets/img/pengumuman/peng.jpeg') }}" alt="">
                        <div class="overlay">
                            <div class="desc">
                                <span class="status"><i class="fas fa-calendar-check"></i> Terbit: 1 Januari 2023</span>
                                <a href="#" class="title">pengumuman</a>
                            </div>
                        </div>
                    </div>

                    <div class="sub">
                        <div class="img">
                            <img src="{{ url('assets/img/pengumuman/peng1.jpg') }}" alt="">
                        </div>
                        <div class="desc">
                            <span class="status"><i class="fas fa-calendar-check"></i> Terbit: 1 Januari 2023</span>
                            <a href="#" class="title">Sub pengumuman</a>
                        </div>
                    </div>

                    <div class="sub">
                        <div class="img">
                            <img src="{{ url('assets/img/pengumuman/peng1.jpg') }}" alt="">
                        </div>
                        <div class="desc">
                            <span class="status"><i class="fas fa-calendar-check"></i> Terbit: 1 Januari 2023</span>
                            <a href="#" class="title">Sub pengumuman</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="kanan">
            <div class="title">
                <div class="line"></div>
                <h1>Prestasi</h1>
            </div>

            <div class="body">
                <div class="pengumuman">
                    <div class="card">
                        <img src="{{ url('assets/img/prestasi/pres.jpeg') }}" alt="">
                        <div class="overlay">
                            <div class="desc">
                                <span class="status">Nama: </span>
                                <a href="#" class="title">Prestasi: </a>
                            </div>
                        </div>
                    </div>

                    <div class="sub">
                        <div class="img">
                            <img src="{{ url('assets/img/prestasi/pres1.jpeg') }}" alt="">
                        </div>
                        <div class="desc">
                            <span class="status">Nama: </span>
                            <a href="#" class="title">Prestasi : </a>
                        </div>
                    </div>

                    <div class="sub">

                        <div class="img">
                            <img src="{{ url('assets/img/prestasi/pres2.jpeg') }}" alt="">
                        </div>

                        <div class="desc">
                            <span class="status">Nama: </span>
                            <a href="#" class="title">Prestasi : </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="lima">
        <div class="kiri">
            <div class="title">
                <div class="line"></div>
                <h1>Blog Guru</h1>
            </div>

            <div class="body">
                <div class="pengumuman">
                    <div class="card">
                        <img src="{{ url('assets/img/blog_guru/bg3.jpeg') }}" alt="">
                        <div class="overlay">
                            <div class="desc">
                                <span class="status"><i class="fa-solid fa-user"></i> Oleh: </span>
                            <a href="#" class="title">Judul</a>
                            </div>
                        </div>
                    </div>

                    <div class="sub">
                        <div class="img">
                            <img src="{{ url('assets/img/blog_guru/bg2.jpeg') }}" alt="">
                        </div>
                        <div class="desc">
                            <span class="status"><i class="fa-solid fa-user"></i> Oleh: </span>
                            <a href="#" class="title">Judul</a>
                        </div>
                    </div>

                    <div class="sub">
                        <div class="img">
                            <img src="{{ url('assets/img/blog_guru/b1.jpeg') }}" alt="">
                        </div>
                        <div class="desc">
                            <span class="status"><i class="fa-solid fa-user"></i> Oleh: </span>
                            <a href="#" class="title">Judul</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="kanan">
            <div class="title">
                <div class="line"></div>
                <h1>Ekskul</h1>
            </div>

            <div class="body">
                <div class="pengumuman">
                    <div class="card">
                        <img src="{{ url('assets/img/ekskul/e.jpg') }}" alt="">
                        <div class="overlay">
                            <div class="desc">
                                <span class="status">Nama: </span>
                                <a href="#" class="title">Prestasi: </a>
                            </div>
                        </div>
                    </div>

                    <div class="sub">
                        <div class="img">
                            <img src="{{ url('assets/img/ekskul/e1.jpg') }}" alt="">
                        </div>
                        <div class="desc">
                            <span class="status">Nama: </span>
                            <a href="#" class="title">Prestasi : </a>
                        </div>
                    </div>

                    <div class="sub">
                        <div class="img">
                            <img src="{{ url('assets/img/ekskul/e2.jpg') }}" alt="">
                        </div>
                        <div class="desc">
                            <span class="status">Nama: </span>
                            <a href="#" class="title">Prestasi : </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="tujuh">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <div class="q1">
                        <h1 class="qt">QUOTES</h1>
                        <h1 class="qb"> <span style="color: #F0CA30;">"Setiap orang menjadi guru"</span> Ki hajar Dewantara</h1>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="q1">
                        <h1 class="qt">QUOTES</h1>
                        <h1 class="qb"> <span style="color: #F0CA30;">"...Pendidikan dan pengajaran di dalam Republik Indonesia harus berdasarkan kebudayaan dan kemasyarakatan bangsa Indonesia, menuju ke arah kebahagiaan batin serta keselamatan hidup lahir..."</span> Ki hajar Dewantara</h1>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="q1">
                        <h1 class="qt">QUOTES</h1>
                        <h1 class="qb"> <span style="color: #F0CA30;">"...An investment in knowladge pays best interest..."</span>- oleh Banjamin Frenklin</h1>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="delapan">

        <div class="title">
            <div class="line"></div>
            <h1>Daftar GTK</h1>
        </div>

        <div class="body pt-3">
            <!-- Swiper -->
            <div class="footer-slide">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="kiri">
                            <div class="name">
                                Dra. CYNTHIA CORINA EVA P
                            </div>
                        </div>

                        <div class="kanan">
                            <a href="#" class="btn">
                                <img src="{{ url('assets/img/gtk/gtk.png') }}" alt="">
                            </a>
                        </div>

                    </div>

                    <div class="swiper-slide">
                        <div class="kiri">
                            <div class="name">
                                TRI MURNI LESTARI S.Pd
                            </div>
                        </div>

                        <div class="kanan">
                            <a href="#" class="btn">
                                <img src="{{ url('assets/img/gtk/gtk.png') }}" alt="">
                            </a>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="kiri">
                            <div class="name">
                                MOHAMMAD PITONO
                            </div>
                        </div>

                        <div class="kanan">
                            <a href="#" class="btn">
                                <img src="{{ url('assets/img/gtk/gtk.png') }}" alt="">
                            </a>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="kiri">
                            <div class="name">
                                WIRAYUDO S.Pd
                            </div>
                        </div>

                        <div class="kanan">
                            <a href="#" class="btn">
                                <img src="{{ url('assets/img/gtk/gtk.png') }}" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="kiri">
                            <div class="name">
                                Dra. ETTY WIJAYATI
                            </div>
                        </div>

                        <div class="kanan">
                            <a href="#" class="btn">
                                <img src="{{ url('assets/img/gtk/gtk.png') }}" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="kiri">
                            <div class="name">
                                ATIK MARTINI S.Pd
                            </div>
                        </div>

                        <div class="kanan">
                            <a href="#" class="btn">
                                <img src="{{ url('assets/img/gtk/gtk.png') }}" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer-slide-resp">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="kiri">
                            <div class="name">
                                Dra. CYNTHIA CORINA EVA P
                            </div>
                        </div>

                        <div class="kanan">
                            <a href="#" class="btn">
                                <img src="{{ url('assets/img/gtk/gtk.png') }}" alt="">
                            </a>
                        </div>

                    </div>

                    <div class="swiper-slide">
                        <div class="kiri">
                            <div class="name">
                                TRI MURNI LESTARI S.Pd
                            </div>
                        </div>

                        <div class="kanan">
                            <a href="#" class="btn">
                                <img src="{{ url('assets/img/gtk/gtk.png') }}" alt="">
                            </a>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="kiri">
                            <div class="name">
                                MOHAMMAD PITONO
                            </div>
                        </div>

                        <div class="kanan">
                            <a href="#" class="btn">
                                <img src="{{ url('assets/img/gtk/gtk.png') }}" alt="">
                            </a>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="kiri">
                            <div class="name">
                                WIRAYUDO S.Pd
                            </div>
                        </div>

                        <div class="kanan">
                            <a href="#" class="btn">
                                <img src="{{ url('assets/img/gtk/gtk.png') }}" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="kiri">
                            <div class="name">
                                Dra. ETTY WIJAYATI
                            </div>
                        </div>

                        <div class="kanan">
                            <a href="#" class="btn">
                                <img src="{{ url('assets/img/gtk/gtk.png') }}" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="kiri">
                            <div class="name">
                                ATIK MARTINI S.Pd
                            </div>
                        </div>

                        <div class="kanan">
                            <a href="#" class="btn">
                                <img src="{{ url('assets/img/gtk/gtk.png') }}" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>

    </div>
</div>



@endsection
