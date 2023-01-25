@extends('layout.app')
@section('title', 'Struktur Organisasi')

@section('content')

<div class="container-stg">
    @include('layout.sidebar')
    <div class="one">
        <div class="title">
            <h1>STRUKTUR ORGANISASI</h1>
        </div>

        <div class="body">
            <img src="{{ url('assets/img/stg/stg.png') }}" alt="">
        </div>
        
    </div>
</div>

@endsection
