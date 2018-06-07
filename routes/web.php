<?php

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

Route::get('/', function () {
    return view('pages.index');
});

Route::get('/workshop', function () {
    if (auth()->user()) {
        return view('pages.workshop');
    } else {
        return redirect('/login')->with('status', 'Please Sign up to access Workshops');
    }
});

// email validation routes
Route::get('/emailV/{token}', 'Auth\RegisterController@verifyUser');

Auth::routes();
