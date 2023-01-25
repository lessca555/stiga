@extends('layout.app')
@section('title', 'Ekskul')

@section('content')

<div class="container-ks">
    @include('layout.sidebar')
    <div class="one">
        <div class="title">
            <h1>Ekstra kurikuler</h1>
        </div>

        <div class="body">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <img src="{{ url('assets/img/ekskul/e3.jpg') }}" alt="">
                        <div class="overlay">
                            <div class="text">
                                <a href="#">Ekskul 1</a>

                                <p class="pt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda illum voluptatibus ipsam, quas magni sit fugiat quod quia ratione rem maiores consectetur quos impedit modi asperiores sapiente tenetur praesentium dicta?</p>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 pt-3">
                    <div class="card">
                        <img src="{{ url('assets/img/ekskul/e4.jpg') }}" alt="">
                        <div class="overlay">
                            <div class="text">
                                <a href="#">Ekskul 2</a>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam optio quam illum minima dolor iusto provident ut in, veritatis sequi culpa tempore id quos eum?</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 pt-3">
                    <div class="card">
                        <img src="{{ url('assets/img/ekskul/e5.jpg') }}" alt="">
                        <div class="overlay">
                            <div class="text">
                                <a href="#">Ekskul 3</a>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta voluptatibus odio at iusto in vero veniam ducimus voluptates enim, aspernatur dolor distinctio, repellat officiis sunt sequi eius alias. Modi cupiditate ad doloribus a tempore maiores deserunt libero, quam ea quaerat?
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 pt-3">
                    <div class="card">
                        <img src="{{ url('assets/img/ekskul/e6.jpg') }}" alt="">
                        <div class="overlay">
                            <div class="text">
                                <a href="#">Ekskul 4</a>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. At, explicabo. Necessitatibus id ratione, sint non sequi excepturi dolor vel consequatur eligendi, saepe doloribus, commodi atque!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection
