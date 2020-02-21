@extends('layout.app')
@section('title', 'Welcome')
@section('header')
    <div id="header">
        <div class="container">

            <!-- Logo -->
            <div id="logo">
                <h1><a href="#">Russel <span1 style="color:#ab7442;">"Twistzz"</span1> Van Dulken</a></h1>
                <p> A Laravel6 Blog </p>
            </div>

            @include('layout.partials.nav')
        </div>
    </div>
@endsection
@section('content')
    <div class="container">
        <div class="homepage">
            <div class="page">
                <div class="row">
                    <div class="col-9">
                        <section id="box2">
                            <header>
                                <h2>About the Author</h2>
                            </header>
                            <div> <a href="#" class="image full"><img src="images/header.jpeg" alt=""></a> </div>
                            <p>Russel Van Dulken, better known as Twistzz, is a Canadian Counter-Strike: Global Offensive
                                player currently playing for Team Liquid. He has previously played for top teams such as
                                Team SoloMid and Misfits. Twistzz was named the MVP of ESL One New York 2018 and IEM Sydney
                                2019 by HLTV.</p>
                        </section>
                    </div>
                    <div class="col-3">
                        <section id="box3">
                            <header>
                                <h2>Latest Posts</h2>
                            </header>
                            <ul class="style1">
                                @foreach ($posts as $post)
                                <div class="{{ $loop->index === 0 ? 'first' : '' }}">
                                    <li>
                                        <a href="{{ $post->path() }}"> {{ $post->title }}</a>
                                    </li>
                                </div>
                                @endforeach
                            </ul>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
