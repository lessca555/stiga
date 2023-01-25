@extends('layout.app')
@section('title', 'Ekskul')

@section('content')

<div class="container-pd">
    @include('layout.sidebar')
    <div class="one">
        <div class="title">
            <h1>PPDB SMK NEGERI 3 SURABAYA 2021/2022</h1>
        </div>

        <div class="body">
            <img src="{{ url('assets/img/ppdb/ppdb.jpg') }}" alt="">
            <img src="{{ url('assets/img/ppdb/ppdb1.jpg') }}" alt="">
            <img src="{{ url('assets/img/ppdb/ppdb2.jpg') }}" alt="">
            <img src="{{ url('assets/img/ppdb/ppdb3.jpg') }}" alt="">
            <img src="{{ url('assets/img/ppdb/ppdb4.jpg') }}" alt="">
            <img src="{{ url('assets/img/ppdb/ppdb5.jpg') }}" alt="">
            <img src="{{ url('assets/img/ppdb/ppdb6.jpg') }}" alt="">
            <img src="{{ url('assets/img/ppdb/ppdb7.jpg') }}" alt="">
        </div>

    </div>
</div>

@endsection
