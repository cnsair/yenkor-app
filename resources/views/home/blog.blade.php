@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Latest Blogs</h1>
    @foreach($blogs as $blog)
        <div class="card mb-4">
            <div class="card-body">
                <h2 class="card-title">{{ $blog->title }}</h2>
                @if($blog->image_url)
                    <img src="{{ $blog->image_url }}" alt="Blog Image" class="img-fluid mb-3">
                @endif
                <p class="card-text">{{ $blog->content }}</p>
                <small class="text-muted">Posted on {{ $blog->created_at->format('F j, Y') }}</small>
            </div>
        </div>
    @endforeach
</div>
@endsection
