@extends('layout.app')
@section('title', 'Desain Pemodelan & Informasi Bangunan (DPIB)')
@section('content')

<div class="container-jurusan">
    @include('layout.sidebar')
    <div class="one">
        <div class="title">
            <h1>Desain Pemodelan & Informasi Bangunan (DPIB)</h1>
        </div>

        <div class="gambar">
            <img src="{{ url('assets/img/jurusan/dpib.jpg') }}" alt="">
        </div>

        <div class="desc">
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero itaque totam amet? Adipisci atque quisquam, vel nisi illum veniam dolore officiis expedita repudiandae, asperiores unde, id quas ad dolorem vero.
            </p>
        </div>

    </div>
</div>

@endsection


