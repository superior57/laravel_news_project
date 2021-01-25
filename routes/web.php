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

// Auth::routes();
Auth::routes(['register' => false]);

Route::get('/', 'HomeController@index');

Route::get('pagenotfound', function() {
    return view('errors.404');
})->name('notfound');

Route::get("admin/403", function() {
    return view("admin.403");
})->name("admin.403");

Route::get('news', function() {
    return view('news.index');
});
Route::get('news/details', function() {
    return view('news.details');
});

Route::get('events', "HomeController@event")->name("events");
Route::get('event/details/{id}', "HomeController@eventDetails");

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

Route::get('privacy-policy', function() {
    return view('terms.privacy-policy');
});
Route::get('store-terms', function() {
    return view('terms.store-terms');
});
Route::get('terms-conditions', function() {
    return view('terms.terms-conditions');
});

Route::get('projects', function() {
    return view('projects.index');
});

Route::get('artists', function() {
    return view('artists.index');
});
Route::get('artist/details', function() {
    return view('artists.details');
});


Route::get('admin', function() {
    return redirect("/admin/event");
});
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'admin']], function () {
    Route::resource('/todo', 'Admin\TodoController');
    Route::resource("/event", "Admin\EventController");
    Route::resource("/settings", "Admin\SettingsController");
});

Route::get("create-admin", function() {
    $user = new App\User();
    $user->password = Hash::make('123456789');
    $user->email = 'admin@admin.com';
    $user->name = 'Admin';
    $user->usertype = "admin";
    $user->save();
});
