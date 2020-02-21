@extends('layout.app')
@section('title', 'Create Post')
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
                        <li class="breadcrumb-item active" aria-current="page">Create Post</li>
                    </ol>
                </nav>
                <div class="page">
                    <header>
                        <h2>Create Post</h2>
                    </header>
                    <form action="{{ route('posts.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input
                                type="text"
                                class="form-control @error('title') is-invalid @enderror"
                                name="title"
                                id="title"
                                aria-describedby="helpId"
                                placeholder=""
                                value="{{ old('title') }}">
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
                                value="{{ old('excerpt') }}">
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
                                    rows="10">{{ old('content') }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="tags">Tags</label>
                            <select class="custom-select" name="tags[]" multiple>
                                @foreach ($tags as $tag)
                                    <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                                @endforeach
                            </select>
                            @error('tags')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <a href={{ route('posts.index') }} class="btn btn-sm btn-danger">Cancel</a>
                        <button type="submit" class="btn btn-sm btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
