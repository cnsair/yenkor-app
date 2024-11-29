@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Create a New Blog Post</h1>
    <form action="{{ route('blogs.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" class="form-control" value="{{ old('title') }}" required>
            @error('title')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="content">Content:</label>
            <textarea id="content" name="content" rows="5" class="form-control" required>{{ old('content') }}</textarea>
            @error('content')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="image">Upload Image:</label>
            <input type="file" id="image" name="image" class="form-control">
            @error('image')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary mt-3">Post Blog</button>
    </form>
</div>
@endsection
