@extends('layout.app')
@section('title', 'Teknik Instalasi Tenaga Listrik (TITL)')
@section('content')

<div class="container-jurusan">
    @include('layout.sidebar')
    <div class="one">
        <div class="title">
            <h1>Teknik Instalasi Tenaga Listrik (TITL)
            </h1>
        </div>

        <div class="gambar">
            <img src="{{ url('assets/img/jurusan/titl.jpg') }}" alt="">
        </div>

        <div class="desc">
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero itaque totam amet? Adipisci atque quisquam, vel nisi illum veniam dolore officiis expedita repudiandae, asperiores unde, id quas ad dolorem vero.
            </p>
        </div>

    </div>
</div>

@endsection


