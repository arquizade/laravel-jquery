@extends('layout')

@section('content')
    <div class="container mt-4">
        <h1>{{ $post->title }}</h1>
        <p>{{ $post->content }}</p>
        <a href="{{ route('posts.index') }}" class="btn btn-secondary">Back to all posts</a>
    </div>
@endsection
