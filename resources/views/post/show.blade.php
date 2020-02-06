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
    <div id="page">
        <div class="container">
            <div class="row">
                <div class="12u">
                    <section id="content" >
                        <a href="{{ route('posts.index') }}" class="text-primary">< Go back</a><br><br>
                        <header>
                            <h2>{{ $post->title }}</h2>
                        </header>
                        <p>{!! $post->content !!}</p>
                        <div class="btn-group inline pull-left" data-toggle="buttons-checkbox">
                            <a href="{{ route('posts.edit', $post) }}" class="btn btn-sm btn-info">Edit</a>&nbsp;&nbsp;&nbsp;&nbsp;
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
    </div>
@endsection
