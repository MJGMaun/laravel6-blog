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
                <div class="col-12">
                    <section id="content">
                        <header>
                            <h2>Update Post</h2>
                        </header>
                        <form action="{{ route('posts.update', $post) }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input
                                        type="text"
                                        class="form-control @error('title') is-invalid @enderror"
                                        name="title"
                                        id="title"
                                        aria-describedby="helpId"
                                        placeholder=""
                                        value="{{ $post->title }}">
                                @error('title')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="content">Content</label>
                                <textarea
                                            class="form-control @error('content') is-invalid @enderror"
                                            name="content"
                                            id="content"
                                            rows="10">
                                            {{ $post->content }}
                                </textarea>
                            </div>
                            <a href={{ route('posts.index') }} class="btn btn-sm btn-danger">Cancel</a>
                            <button type="submit" class="btn btn-sm btn-primary">Submit</button>
                        </form>
                    </section>
                </div>
            </div>
        </div>
    </div>
@endsection
