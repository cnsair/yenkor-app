<?php

use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {

    // Route::get('/', [
    //     HomeController::class, 'showInHome'
    // ])->name('homepage');

    Route::get('/', function () {
        return view('home.home');
    })->name('home');

    Route::get('/about', function () {
        return view('home.about');
    })->name('about');

    Route::get('/blog', function () {
        return view('home.blog');
    })->name('blog');

    Route::get('/service', function () {
        return view('home.service');
    })->name('service');

    Route::get('/vehicle', function () {
        return view('home.vehicle');
    })->name('vehicle');

    Route::get('/package', function () {
        return view('home.package');
    })->name('package');

    Route::get('/contact-us', function () {
        return view('home.contact-us');
    })->name('contact');

});








Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
