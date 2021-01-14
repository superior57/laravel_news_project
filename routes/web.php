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
    return redirect('/news');
});

Route::get('news', function() {
    return view('news.index');
});
Route::get('news/details', function() {
    return view('news.details');
});

Route::get('events', function() {
    return view('event.index');
});
Route::get('event/details', function() {
    return view('event.details');
});

Route::get('shop', function() {
    return view('shop.index');
});
Route::get('shop/details', function() {
    return view('shop.details');
});

Route::get('cart', function() {
    return view('cart.index');
});
Route::get('cart/checkout', function() {
    return view('cart.checkout');
});
Route::get('cart/checkout/confirmation', function() {
    return view('cart.thanks');
});

Route::get('contact-us', function() {
    return redirect('contact-us/commission-project');
});
Route::get('contact-us/commission-project', function() {
    return view('contact-us.commission-project');
});
Route::get('contact-us/submit-artwork', function() {
    return view('contact-us.submit-artwork');
});
Route::get('contact-us/about-us', function() {
    return view('contact-us.about-us');
});

Route::get('projects', function() {
    return view('projects.index');
});

Route::get('artists', function() {
    return view('artists.index');
});


Route::group(['middleware' => 'auth'], function () {
    Route::resource('/todo', 'TodoController');
});