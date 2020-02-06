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
    <div id="page">
        <div class="container">
            <div class="row">
                <div class="12u">
                    <section id="box3">
                        <header>
                            <h2>Blog Posts</h2>
                        </header>
                        <ul class="style1">
                            @foreach ($posts as $post)
                                <li class="{{ $loop->index === 0 ? 'first' : '' }}">
                                    <a href="{{ $post->path() }}"> {{ $post->title   }}</a>
                                    <div> {{ $post->excerpt }} <a href="{{ $post->path() }}" class="text-primary">Show more </a></div>
                                </li>
                            @endforeach
                        </ul>
                    </section>
                </div>
            </div>
        </div>
    </div>
@endsection
{{--
    <div class="container">
        <h1> Posts </h1>
        <button><a href={{ route('posts.create') }}> New Post </a></button>
        @foreach ($posts as $post)
        <h2> {{ $loop->index + 1 }}. {{ $post->title }}</h2>
        <div> {{ $post->content }}</div>
        <a href="{{ $post->path() }}"> Show more </a>
        @endforeach
    </div>
 --}}
