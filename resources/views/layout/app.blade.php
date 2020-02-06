<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    {{-- @include('layout.partials.head') --}}
    <title>Laravel Blog - @yield('title')</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>
    <!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
    <!-- START Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- END Bootstrap core CSS -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="{{ asset('/js/skel.min.js') }}"></script>
    <script src="{{ asset('/js/skel-panels.min.js') }}"></script>
    <script src="{{ asset('/js/init.js') }}"></script>
    <script src="{{ asset('/js/app.js') }}"></script>
    <!-- Custom styles for this template -->
    {{-- <noscript> --}}
        <link rel="stylesheet" href="{{ asset('/css/style.css') }}" />
        <link rel="stylesheet" href="{{ asset('/css/style-desktop.css') }}" />
        {{-- <link rel="stylesheet" href="/css/app.css"> --}}
    {{-- </noscript> --}}
    <!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
    <!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->
    {{-- @yield('css') --}}
</head>

<body>
    <div id="wrapper">
        @yield('header')
        @yield('content')
        @yield('footer')
        <!-- Copyright -->
        <div id="copyright">
            <div class="container">
                Design: <a href="http://templated.co">TEMPLATED</a> Edited: <a href="http://unsplash.com">MJMaun</a>
            </div>
        </div>
    </div>

    {{-- @include('layout.partials.footer-scripts') --}}
    <!-- START Bootstrap core JavaScript ================================================= -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- END Bootstrap core JavaScript ================================================= -->
    {{-- @yield('scripts') --}}
</body>

