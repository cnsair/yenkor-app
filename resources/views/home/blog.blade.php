@extends('layouts.app-home')

@section('content')

    <div class="breadcrumb-div">
        <div class="container">
            <h1 class="page-title mb-0">Blog</h1>
            <ol class="breadcrumb">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>Blog</li>
            </ol>
        </div>
    </div>

    <section class="div-padding border-0">
        <div class="container">
            <h2 class="div-title text-center">Blog</h2>
            <div class="blog-posts">
                <div class="blog-card col-lg-4 col-md-6">
                    <div>
                        <div class="post-thumb">
                            <img src="assets/assets/images/blog/1.webp" alt class="w-100">
                        </div>
                        <div class="post-info-v-2 post-info">
                            <span class="category-v-2 category">discuss</span>
                            <h2>
                                <a class="blog-link" href="blog-single-post.html" title>5 Things That You Need To Knows
                                    About E-Commerce</a>
                            </h2>
                            <p class="blog-text">
                                Handshake scrum project learning curve termsheet buzz
                                bandwidth alpha pivot analytics supply.
                            </p>
                            <span class="posted-on">May 3rd, 2020, by <a href="#" title>Admin</a></span>
                        </div>
                    </div>

                </div>
                <div class="blog-card col-lg-4 col-md-6">
                    <div>
                        <div class="post-thumb">
                            <img src="assets/assets/images/blog/2.webp" alt class="w-100">
                        </div>
                        <div class="post-info-v-2 post-info">
                            <span class="category-v-2 category">discuss</span>
                            <h2>
                                <a class="blog-link" href="blog-single-post.html" title>5 Things That You Need To Knows
                                    About E-Commerce</a>
                            </h2>
                            <p class="blog-text">
                                Handshake scrum project learning curve termsheet buzz
                                bandwidth alpha pivot analytics supply.
                            </p>
                            <span class="posted-on">May 2nd, 2020, by <a href="#" title>Admin</a></span>
                        </div>
                    </div>

                </div>
                <div class="blog-card col-lg-4 col-md-6">
                    <div>
                        <div class="post-thumb">
                            <img src="assets/assets/images/blog/3.webp" alt class="w-100">
                        </div>
                        <div class="post-info-v-2 post-info">
                            <span class="category-v-2 category">resources</span>
                            <h2>
                                <a class="blog-link" href="blog-single-post.html" title>Branding Mockup Essentials for
                                    Your Projects</a>
                            </h2>
                            <p class="blog-text">
                                Handshake scrum project learning curve termsheet buzz
                                bandwidth alpha pivot analytics supply.
                            </p>
                            <span class="posted-on">April 22th, 2020, by <a href="#" title>Admin</a></span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

@endsection