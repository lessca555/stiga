<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>@yield('title')</title>
        <link rel="stylesheet" href="{{ url('assets/bootstrap5/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ url('assets/fontawesome6/css/all.css') }}">
        <link rel="stylesheet" href="{{ url('assets/css/app.css') }}">
        <link rel="stylesheet" href="{{ url('assets/css/swiper_carousel.css') }}">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
    </head>
    <body>
        <div id="app">
            @include('layout.navbar')

            <main>
                @yield('content')
            </main>

            @include('layout.footer')
        </div>

        <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
        <script src="{{ url('assets/js/app.js') }}"></script>
        <script src="{{ url('assets/bootstrap5/js/bootstrap.min.js') }}"></script>
    </body>
</html>
