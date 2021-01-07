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
    return view('concept');
});

Route::get('article', function() {
    return view('article');
});


Route::group(['middleware' => 'auth'], function () {
    Route::resource('/todo', 'TodoController');
});