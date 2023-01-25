@extends('layout.app')
@section('title', 'Bisnis Konstruksi dan Properti (BKP)')
@section('content')

<div class="container-jurusan">
    @include('layout.sidebar')
    <div class="one">
        <div class="title">
            <h1>Bisnis Konstruksi dan Properti (BKP)</h1>
        </div>

        <div class="gambar">
            <img src="{{ url('assets/img/jurusan/bkp.jpg') }}" alt="">
        </div>

        <div class="desc">
            <p>
                Bidang kerja yang sesuai adalah di dunia konstruksi bangunan, bisa di perusahaan konsultan perencana, kontraktor, konsultan pengawas, developer perumahan, dan sejenisnya. jika jurusan gambar bangunan lebih banyak berkecimpung di kantor seperti drafer, estimator. sedangkan jurusan TKBB lebih banyak bekerja dilapangan seperti pelaksana, pengawas, surveyor / uitzet, mandor, quality control, dan sejenisnya. tapi jurusan TKBB juga bisa bekerja sebagai drafter apabila punya kemampuan menggambar bangunan. dari segi gaji sama-sama besarnya.
            </p>

            <p>
                Kompetensi Keahlian Teknik Konstruksi Batu dan Beton merupakan bagian dari program studi keahlian Teknik Bangunan. Peserta didik juga akan belajar bagaimana membuat sebuah bangunan mulai dari persiapan, proses pembuatan, finishing, pemeliharaan, sampai dengan penghitungan biaya secara rinci.
            </p>

            <p>
                Kompetensi Lulusan peserta didik Teknik Konstruksi Batu dan Beton antara lain bertujuan untuk mencetak tenaga ahli di bidang Teknik Sipil / Bangunan dengan keahlian:
            </p>
            <b> Sekolah teknik bangunan lulus mau jadi apa? </b>
            <p>
                1. Pelaksana Proyek Konstruksi
                <br>
                2. Pengawasan Proyek Konstruksi
                <br>
                3. Estimator Biaya Konstruksi
                <br>
                4. Meneruskan ke jenjang pendidikan yang lebih tinggi (Perguruan Tinggi): Teknik Sipil, Teknik Arsitektur, Teknik Survei dan Pemetaan, dsb.
            </p>
        </div>

    </div>
</div>

@endsection
