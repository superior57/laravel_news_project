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

Auth::routes();

Route::get('/', function () {
    return view('news');
});

Route::get('news-details', function() {
    return view('news-details');
});
Route::get('events', function() {
    return view('events');
});
Route::get('event-details', function() {
    return view('event-details');
});
Route::get('shop', function() {
    return view('shop');
});
Route::get('shop-details', function() {
    return view('shop-details');
});

Route::group(['middleware' => 'auth'], function () {
    Route::resource('/todo', 'TodoController');
});