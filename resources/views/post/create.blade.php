@extends('layout.app')

@section('title', 'Create')

@section('content')
    <h1>Create post</h1>
    <form action="{{ route('posts.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" name="title" id="title" aria-describedby="helpId" placeholder="">
            @error('title')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group">
            <label for="content">Content</label>
            <input type="text" class="form-control" name="content" id="content" aria-describedby="helpId" placeholder="">
            @error('content')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <br><br>
    <a href={{ route('posts.index') }}>Go back</a>
@endsection
