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

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/', function () {
    return view('index');
});

Route::get('/profile', 'profile@index');

Route::get('/logout', 'profile@logout');

Route::get('/home', function () {
    return view('home');
});
Route::get('/youcreate', function () {
    return view('youcreate');
});
Route::get('/youmakeimpact', function () {
    return view('youmakeimpact');
});
Route::get('/youconnect', function () {
    return view('youconnect');
});
Route::get('/profile', function () {
    return view('profile');
});





Route::get('/home', 'home@index');

Route::get('/home/content-detail', 'home@content_detail');

Route::get('/redirect', 'login@redirect');
Route::get('/callback', 'login@callback');
