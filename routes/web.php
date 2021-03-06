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
Route::get('/youcreate', function () {
    return view('youcreate');
});
Route::get('/youconnect', function () {
    return view('youconnect');
});
Route::get('/youmakeimpact', function () {
    return view('youmakeimpact');
});

Route::get('/profile/{idChannel}', 'profile@index');
Route::get('/profile/subscribe/{idChannel}', 'profile@subscribe');
Route::get('/profile/unsubscribe/{idChannel}', 'profile@unsubscribe');

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

Route::get('/about', function () {
    return view('about');
});

Route::get('/content_detail', function () {
    return view('content_detail');
});

Route::get('/search', 'search@index');
Route::post('/search', 'search@cariUser');

Route::get('/home', 'home@index');

Route::get('/home/content-detail', 'home@content_detail');

Route::get('/redirect', 'login@redirect');
Route::get('/callback', 'login@callback');
