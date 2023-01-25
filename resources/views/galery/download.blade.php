@extends('layout.app')
@section('title', 'Galery Download')

@section('content')

<div class="container-galery">
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

</div>

@endsection
