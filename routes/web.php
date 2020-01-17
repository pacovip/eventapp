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

Route::get('/', 'Web\IndexController@index');
// registration's route
Route::get('register', 'Auth\WebRegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\WebRegisterController@register')->name('register');
Route::get('confirmemail', function (){ return view('auth.confirmemail'); })->name('confirmemail');
Route::post('confirmemail', 'Auth\WebRegisterController@confirmEmail')->name('confirmemail');
// login's route
Route::get('login', 'Auth\WebLoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\WebLoginController@login')->name('login');
//Route::post('password/request', 'Auth\WebLoginController@')->name('password.request');
Route::post('logout', 'Auth\WebLoginController@logout')->name('logout');
Route::get('logout', 'Auth\WebLoginController@logout')->name('logout');

// module's route
Route::group([], function() {    
    Route::Resource('profile', 'Web\ProfileController');
    Route::Resource('eventstype', 'Web\Events_typeController');
    Route::Resource('city', 'Web\CityController');
    Route::Resource('town', 'Web\TownController');
    Route::Resource('district', 'Web\DistrictController');
    Route::Resource('event', 'Web\EventController');
    Route::Resource('favorite', 'Web\FavoriteController');
    Route::Resource('hobby', 'Web\HobbyController');
});


Route::prefix('/admin')->name('admin.')->namespace('Admin')->group(function(){    
    //Login Routes
    Route::get('/login','Auth\LoginController@showLoginForm')->name('login');
    Route::post('/login','Auth\LoginController@login')->name('login');
    Route::get('/logout','Auth\LoginController@logout')->name('logout');
    //Forgot Password Routes
    Route::get('/password/reset','Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
    Route::post('/password/email','Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
    //Reset Password Routes
    Route::get('/password/reset/{token}','Auth\ResetPasswordController@showResetForm')->name('password.reset');
    Route::post('/password/reset','Auth\ResetPasswordController@reset')->name('password.update');    
});


Route::prefix('/admin')->name('admin.')->namespace('Admin')->middleware('auth:admin')->group(function(){    
    // Admin modules routes
    Route::get('/', 'IndexController@index')->name('home');
    Route::get('index', 'IndexController@index')->name('index');
    Route::post('index', 'IndexController@index')->name('index');
    Route::Resource('profile', 'ProfileController');
    Route::Resource('user', 'UserController');
    Route::Resource('admin', 'AdminController');
    Route::Resource('eventstype', 'Events_typeController');
    Route::Resource('city', 'CityController');
    Route::Resource('town', 'TownController');
    Route::Resource('district', 'DistrictController');
    Route::Resource('event', 'EventController');
    Route::Resource('favorite', 'FavoriteController');
    Route::Resource('hobby', 'HobbyController');
});