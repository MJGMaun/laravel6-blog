@extends('layout.app')
@section('title', 'Posts')
@section('header')
    <div id="header">
        <div class="container">
            @include('layout.partials.nav')
        </div>
    </div>
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Posts</li>
                    </ol>
                </nav>
                <section id="page">
                <header>
                    <h2>Blog Posts</h2>
                </header>
                    <ul class="style1">
                        @foreach ($posts as $post)
                        <li class="{{ $loop->index === 0 ? 'first' : '' }}">
                            <a href="{{ $post->path() }}"> {{ $post->title   }}</a>
                            <div> {{ $post->excerpt }} <a href="{{ $post->path() }}" class="text-primary">Show more
                                </a></div>
                        </li>
                        @endforeach
                    </ul>
                </section>
            </div>
        </div>
    </div>
@endsection
