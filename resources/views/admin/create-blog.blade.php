@extends('layouts.admin')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1 class="text-center mb-4">Create a New Blog Post</h1>

            <!-- Display Success Message -->
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <!-- Display Validation Errors -->
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!-- Blog Form -->
            <div class="card shadow">
                <div class="card-body">
                    <form action="{{ route('blogs.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <!-- Title Field -->
                        <div class="form-group mb-3">
                            <label for="title" class="form-label">Blog Title <span class="text-danger">*</span></label>
                            <input type="text" id="title" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title') }}" placeholder="Enter blog title" required>
                            @error('title')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <!-- Content Field -->
                        <div class="form-group mb-3">
                            <label for="content" class="form-label">Content <span class="text-danger">*</span></label>
                            <textarea id="content" name="content" rows="6" class="form-control @error('content') is-invalid @enderror" placeholder="Write your blog content here..." required>{{ old('content') }}</textarea>
                            @error('content')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <!-- Image Upload -->
                        <div class="form-group mb-3">
                            <label for="image" class="form-label">Upload Featured Image</label>
                            <input type="file" id="image" name="image" class="form-control @error('image') is-invalid @enderror">
                            <small class="form-text text-muted">Accepted formats: JPEG, PNG, JPG, GIF (Max size: 2MB).</small>
                            @error('image')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <!-- Submit Button -->
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary w-50">Publish Blog</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
