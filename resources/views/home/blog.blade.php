@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="text-center mb-4">Latest Blogs</h1>

    <!-- Display Success Message -->
    @if(session('success'))
        <div class="alert alert-success text-center">
            {{ session('success') }}
        </div>
    @endif

    <!-- Show Message if No Blogs Exist -->
    @if($blogs->isEmpty())
        <div class="text-center">
            <p class="text-muted">No blog posts are available at the moment. Check back later!</p>
        </div>
    @else
        <div class="row gy-4">
            @foreach($blogs as $blog)
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm border-0">
                        <!-- Blog Image -->
                        @if($blog->image_url)
                            <img src="{{ $blog->image_url }}" class="card-img-top" alt="Blog Image" style="height: 200px; object-fit: cover;">
                        @endif

                        <div class="card-body">
                            <!-- Blog Title -->
                            <h5 class="card-title text-primary fw-bold">{{ $blog->title }}</h5>

                            <!-- Blog Content Preview -->
                            <p class="card-text text-muted">
                                {{ Str::limit($blog->content, 120, '...') }}
                            </p>

                            <!-- Read More Button -->
                            <a href="#" class="btn btn-outline-primary btn-sm mt-3">Read More</a>
                        </div>

                        <!-- Footer with Blog Info -->
                        <div class="card-footer bg-light border-0 text-muted">
                            <small>Posted on {{ $blog->created_at->format('F j, Y') }}</small>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="text-center">
            <p class="text-muted">No blog posts are available at the moment. Check back later!</p>
        </div>
        
          <!-- Pagination Links -->
        <div class="d-flex justify-content-center mt-4">
            {{ $blogs->links('pagination::bootstrap-5') }}
        </div>
    @endif
</div>
@endsection
