@extends('layout.app')

@section('title', 'Update')

@section('content')
    <h1>Update post</h1>
    <form action="{{ route('posts.update', $post) }}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" name="title" id="title" aria-describedby="helpId" placeholder="" value="{{ $post->title }}">
            @error('title')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group">
            <label for="content">Content</label>
            <input type="text" class="form-control" name="content" id="content" aria-describedby="helpId" placeholder="" value="{{ $post->content }}">
            @error('content')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <br><br>
    <a href={{ route('posts.index') }}>Go back</a>
@endsection
