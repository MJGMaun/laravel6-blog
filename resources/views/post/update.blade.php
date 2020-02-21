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
                            <label for="excerpt">Excerpt</label>
                            <input
                                type="text"
                                class="form-control @error('excerpt') is-invalid @enderror"
                                name="excerpt"
                                id="excerpt"
                                aria-describedby="helpId"
                                placeholder=""
                                value="{{ $post->excerpt }}">
                            @error('excerpt')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="content">Content</label>
                            <textarea
                                    class="form-control @error('content') is-invalid @enderror"
                                    name="content"
                                    id="content"
                                    rows="10">{{ $post->content }}</textarea>
                        </div>
                        <a href={{ route('posts.index') }} class="btn btn-sm btn-danger">Cancel</a>
                        <button type="submit" class="btn btn-sm btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
