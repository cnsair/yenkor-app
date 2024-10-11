<?php

use App\Actions\Fortify\UpdateUserProfileInformation;
use App\Http\Controllers\Rider\RiderController;
use App\Http\Controllers\Driver\DriverController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RedirectController;
use App\Models\User;
use Illuminate\Support\Facades\Route;




//=======================================
//Guest/Homepage Routes
//=======================================

Route::middleware('guest')->group(function () {

    Route::get('/home', function () {
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
    Route::resource('redirects', RedirectController::class, 
    ['only' => 'index']);

   
    Route::group(['middleware' => 'rider'], function() {
        Route::prefix('rider')->group(function () {
            Route::name('rider.')->group(function () {

                //view analytics page
                Route::get('/dashboard', function () {
                    return view('rider.dashboard'); })
                    ->name('dashboard');

                //Rider method calls
                // Route::get('/dashboard', [
                //     RiderController::class, 'index'
                // ])->name('rider');

            });
        });
    });


    Route::group(['middleware' => 'driver'], function() {
      
        Route::prefix('driver')->group(function () {
            Route::name('driver.')->group(function () {

                //dashboard:view
                Route::get('/dashboard', function () {
                    return view('driver.dashboard'); })
                    ->name('dashboard');

                //dashboard:view
                Route::get('/edit-profile', function () {
                    return view('driver.edit-profile'); })
                    ->name('edit-profile.edit');

                //view upload page
                Route::patch('/edit-profile', [ProfileController::class, 'update'])
                    ->name('edit-profile.update');

                //view upload page
                Route::delete('/edit-profile', [ProfileController::class, 'destroy'])
                    ->name('edit-profile.destroy');

                // Route::get('/dashboard', [
                //     DriverController::class, 'index'
                // ])->name('driver');

            });
        });
    });



    Route::group(['middleware' => 'admin'], function() {
        Route::prefix('admin')->group(function () {
            Route::name('admin.')->group(function () {

                //view analytics page
                Route::get('/dashboard', function () {
                    return view('admin.dashboard'); })
                    ->name('dashboard');

                //Admin method calls
                // Route::get('/admin/dashboard', [
                //     AdminController::class, 'index'
                // ])->name('admin.admin');

            });
        });
    });


});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    Route::get('/dashboard', function () {
        // return view('dashboard');
        abort(403, 'Unauthorised action!');
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