@extends('layout.app')
@section('title', $post->title)
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
                            <li class="breadcrumb-item"><a href="{{ route('posts.index') }}">Posts</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ $post->title }}</li>
                        </ol>
                    </nav>
                    <section id="page">
                        <header>
                            <h2>{{ $post->title }}</h2>
                        </header>
                        <p>{!! $post->content !!}</p>
                        <div class="btn-group inline pull-left">
                            <a href="{{ route('posts.edit', $post) }}"
                                class="btn btn-sm btn-info">Edit</a>&nbsp;&nbsp;&nbsp;&nbsp;
                            <form action="{{ route('posts.destroy', $post) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        </div>
                    </section>
                </div>
            </div>
        </div>
@endsection
