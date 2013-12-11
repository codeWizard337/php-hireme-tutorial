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
Route::resource('/company', 'CompanyController');
Route::resource('/job', 'JobController');
Route::resource('/apply', 'JobApplicationController');

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
        Route::get('/status', 'JobApplicationController@status')->name('user.status');
    });

    Route::get('/{user}', 'UserController@show')->name('user.show')->where('user', '[0-9]+');
});

Route::view('/laravel', 'welcome')->name('laravel');
