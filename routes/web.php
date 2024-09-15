<?php

use App\Http\Controllers\Rider\RiderController;
use App\Http\Controllers\Driver\DriverController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\RedirectController;
use Illuminate\Support\Facades\Route;




//=======================================
//Guest/Homepage Routes
//=======================================

Route::middleware('guest')->group(function () {

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

    Route::get('/book-ride', function () {
        return view('home.book-ride');
    })->name('book-ride');

});



//===================================================
//      AUTHENTICATION REDIRECTS
//==================================================

Route::group(['middleware' => 'auth'], function() {

    //Main Redirect Controller
    Route::get('redirects', [
        RedirectController::class, 'index'
    ]);


    //Rider method calls
    Route::get('/rider/rider-dashboard', [
        RiderController::class, 'index'
    ])->name('rider.rider');


    //Driver method calls
    Route::prefix('driver')->group(function () {
        Route::name('driver.')->group(function () {

            Route::get('/driver-dashboard', [
                DriverController::class, 'index'
            ])->name('driver');

        });
    });


    //Admin method calls
    Route::get('/admin/admin-dashboard', [
        AdminController::class, 'index'
    ])->name('admin.admin');

});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
        
        // return redirect()->route('redirects');
    // return redirect()->back()->with('success','done');
    })->name('dashboard');

});














Route::group(['middleware' => 'auth'], function() {

    // Route::group(['middleware' => 'role:student', 'prefix' => 'student', 'as' => 'student.'], function(){
    //     Route::resource('lesson', LessonController::class);
    // });

    // Route::group(['middleware' => 'role:rider', 'prefix' => 'rider', 'as' => 'rider.'], function(){
    //     Route::resource('rider', RiderController::class);
    // });

});