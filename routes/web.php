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
//     return view('welcome');
// });

Route::get('/', function () {
    return view('mainpage');
});
Route::get('/home', function () {
    return view('mainpage');
});
Route::get('/about', function () {
    return view('aboutpage');
});
Route::get('/contact', function () {
    return view('contact');
});


// Route::get('/register','VehicleController@index')->name('register');
Route::resource('/vehicleregistration','VehicleController');  
Route::resource('/licenseservice','LicenseController');  

Auth::routes();
Route::get('/vehicle','VehicleController@index');
Route::get('/license','LicenseController@index');
Route::get('/home1', 'HomeController@index')->name('home');
Route::get('/page', function() {
    return view('inc.messages');
});
