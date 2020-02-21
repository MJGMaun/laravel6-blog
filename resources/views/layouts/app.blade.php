<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>Laravel Blog - @yield('title')</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <!-- ================================================================
    ========================    START STYLE   ===========================
    ==================================================================-->
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('/css/style-desktop.css') }}" />
    <link rel="stylesheet" href="{{ asset('/css/custom.css') }}">
    @yield('css')
    <!-- ================================================================
    ========================    END STYLE   =============================
    ==================================================================-->
</head>
<body>
    <div id="wrapper">
        <div id="header">
            <div class="login-nav text-right">
                @guest
                <a href="{{ route('login') }}">Login</a> &nbsp;
                <a href="{{ route('register') }}">Register</a>
                @else
                <div class="dropdown">
                    <button class="btn dropdown-toggle text-muted" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ Auth::user()->name }}
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </div>
                @endguest
            </div>
            <div class="container">
                @yield('header')
                @include('layouts.partials.nav')
            </div>
        </div>
        <div class="container">
            @yield('content')
        </div>
        @yield('footer')
        <div id="copyright">
            <div class="container">
                Design: <a href="http://templated.co">TEMPLATED</a> Edited: <a href="https://github.com/MJGMaun" target="_blank">MJMaun</a>
            </div>
        </div>
    </div>
    <!-- ================================================================
    ========================    START SCRIPTS   =========================
    ==================================================================-->
    <script src="{{ asset('/js/app.js') }}"></script>
    <!-- Custom scripts for this template -->
    @yield('scripts')
    <!-- ================================================================
    ========================    END SCRIPTS   ===========================
    ==================================================================-->
</body>

