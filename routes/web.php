<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'PageController@home')->name('home');
Route::get('/contact', 'PageController@contact')->name('contact');

Route::resource('/user/detail', 'UserDetailController');

Route::group([ 'prefix' => 'user' ], function () {
    Route::group([ 'middleware' => 'guest' ], function() {
        Route::get('/register', 'UserController@showRegisterForm')->name('user.register');
        Route::post('/register', 'UserController@register')->name('register');

        Route::get('/login', 'UserController@showLoginForm')->name('user.login');
        Route::post('/login', 'UserController@login')->name('login');
    });

    Route::group([ 'middleware' => 'auth' ], function() {
        Route::get('/logout', 'UserController@logout')->name('user.logout');

        Route::get('/profile', 'UserController@profile')->name('user.profile');
    });

    Route::group([ 'middleware' => 'guest' ], function() {
        Route::get('/{user}', 'UserController@show')->name('user.show');
    });
});

Route::get('/laravel', function() {
    return view('welcome');
})->name('laravel');

// Route::get('/', function () { return view('home'); });
// Route::get('/login', function() { return view('user.login'); });
// Route::get('/register', function() { return view('user.register'); });
// Route::get('/add/job', function() { return view('employer.add'); });
// Route::get('/company/index', function() { return view('employer.index'); });
// Route::get('/job/index', function() { return view('jobseeker.index'); });
// Route::get('/job/show', function() { return view('jobseeker.show'); });
// Route::get('/profile', function() { return view('user.profile'); });
// Route::get('/edit', function() { return view('user.edit'); });
// Route::get('/add', function() { return view('user.add'); });
// Route::get('/status', function() { return view('user.status'); });
