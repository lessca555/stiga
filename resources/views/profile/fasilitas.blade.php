@extends('layout.app')
@section('title', 'Struktur Organisasi')

@section('content')

<div class="container-vas">
    @include('layout.sidebar')
    <div class="one">
        <div class="title">
            <h1>Fasilitas sekolah</h1>
        </div>

        <div class="body">
            <a href="#">MASJID AT-TAQWA</a>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In dicta aliquid quasi explicabo quod officiis
                molestiae accusamus optio velit iste.</p>

            <a href="#">ARENA BOLA BASKET</a>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In dicta aliquid quasi explicabo quod officiis
                molestiae accusamus optio velit iste.</p>

            <a href="#">RUANG LAB BAHASA</a>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In dicta aliquid quasi explicabo quod officiis
                molestiae accusamus optio velit iste.</p>

        </div>

    </div>
</div>

@endsection
