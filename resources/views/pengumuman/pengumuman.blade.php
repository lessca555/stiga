@extends('layout.app')
@section('title', 'Kategori : Pengumuman')

@section('content')

<div class="container-pengumuman">
    <div class="title">
        <h1>Kategori : Pengumuman</h1>
    </div>

    <div class="body">
        <a href="#" class="link_peng">
            <div class="card">
                <div class="card-body d-flex">
                    <img src="{{ url('assets/img/pengumuman/peng2.jpeg') }}" alt="">
                    <div class="text mx-3">
                        <h1>Judul Pengumuman 1</h1>
                        <span>
                            <i class="fas fa-calendar-check"></i> TERBIT: 2 Januari 2023
                        </span>
                        <br>
                        <br>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem placeat itaque voluptas!</p>
                        <a href="#" class="btn btn-light">Baca selengkapnya</a>
                    </div>
                </div>
            </div>
        </a>

        <a href="#" class="link_peng">
            <div class="card">
                <div class="card-body d-flex">
                    <img src="{{ url('assets/img/pengumuman/peng3.jpeg') }}" alt="">
                    <div class="text mx-3">
                        <h1>Judul Pengumuman 2</h1>
                        <span>
                            <i class="fas fa-calendar-check"></i> TERBIT: 2 Januari 2023
                        </span>
                        <br>
                        <br>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem placeat itaque voluptas!</p>
                        <a href="#" class="btn btn-light">Baca selengkapnya</a>
                    </div>
                </div>
            </div>
        </a>

        <a href="#" class="link_peng">
            <div class="card">
                <div class="card-body d-flex">
                    <img src="{{ url('assets/img/pengumuman/peng3.jpeg') }}" alt="">
                    <div class="text mx-3">
                        <h1>Judul Pengumuman 3</h1>
                        <span>
                            <i class="fas fa-calendar-check"></i> TERBIT: 2 Januari 2023
                        </span>
                        <br>
                        <br>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem placeat itaque voluptas!</p>
                        <a href="#" class="btn btn-light">Baca selengkapnya</a>
                    </div>
                </div>
            </div>
        </a>

        <a href="#" class="link_peng">
            <div class="card">
                <div class="card-body d-flex">
                    <img src="{{ url('assets/img/pengumuman/peng4.jpeg') }}" alt="">
                    <div class="text mx-3">
                        <h1>Judul Pengumuman 4</h1>
                        <span>
                            <i class="fas fa-calendar-check"></i> TERBIT: 2 Januari 2023
                        </span>
                        <br>
                        <br>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem placeat itaque voluptas!</p>
                        <a href="#" class="btn btn-light">Baca selengkapnya</a>
                    </div>
                </div>
            </div>
        </a>
    </div>
</div>



@endsection
