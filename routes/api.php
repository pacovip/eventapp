<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('register', 'Auth\RegisterController@registered');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout');

/*
 * 'prefix'=>'api', 'middleware' => 'auth:api'
 */

Route::group([], function() {
    Route::apiResource('profile', 'Api\ProfileController');
    Route::apiResource('eventstype', 'Api\Events_typeController');
    Route::apiResource('city', 'Api\CityController');
    Route::apiResource('town', 'Api\TownController');
    Route::apiResource('district', 'Api\DistrictController');
    Route::apiResource('event', 'Api\EventController');
    Route::apiResource('favorite', 'Api\FavoriteController');
    Route::apiResource('hobby', 'Api\HobbyController');
});
