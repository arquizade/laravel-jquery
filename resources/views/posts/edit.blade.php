@extends('layout')

@section('content')
    <div class="container mt-4">
        <h1>Edit Post</h1>
        <form id="post-edit-form" action="{{ route('posts.update', $post->id) }}" method="POST">
            @csrf
            @method('PUT')
            <input type="hidden" name="post_id" value="{{ $post->id }}">
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" class="form-control editable-input" id="title" value="{{ $post->title }}" required>
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">Content</label>
                <textarea name="content" class="form-control editable-input" id="content" required>{{ $post->content }}</textarea>
            </div>
            <button type="submit" class="btn btn-warning">Update</button>
        </form>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('js/posts/edit.js') }}"></script> <!-- Include index.js -->
@endsection
