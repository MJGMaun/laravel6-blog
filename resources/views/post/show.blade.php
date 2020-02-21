@extends('layouts.app')
@section('title', $post->title)
@section('header')
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
                    <div class="page">
                        <header>
                            <h2>{{ $post->title }}</h2>
                            <p>By: {{ $user->name }}</p>
                            <small>{{ $post->excerpt }}</small>
                        </header>
                        <p>{!! $post->content !!}</p>
                        <div class="row">
                            <div class="col-12">
                                @foreach ($post->tags as $tag)
                                    <a class="badge badge-light" href="{{ route('posts.index', ['tag' => $tag->name]) }}">{{ $tag->name }}</a>
                                @endforeach
                            </div>
                        </div>
                        @if (Auth::id() === $post->user_id)
                        <div class="spacer-30"></div>
                        <div class="btn-group inline pull-left">
                            <a href="{{ route('posts.edit', $post) }}" class="btn btn-sm btn-info">Edit</a>&nbsp;&nbsp;&nbsp;&nbsp;
                            <form action="{{ route('posts.destroy', $post) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
@endsection
