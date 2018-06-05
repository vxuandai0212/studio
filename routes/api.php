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
// Photo resources
Route::group(['middleware' => 'auth:api'], function() {
    
});
Route::put('photos/{photo}', 'PhotoController@update');
Route::delete('photos/{photo}', 'PhotoController@delete');
Route::post('photos', 'PhotoController@store');
Route::get('photos', 'PhotoController@index');
Route::get('photos/{photo}', 'PhotoController@show');

// Category resources
Route::group(['middleware' => 'auth:api'], function() {
    Route::post('categories', 'CategoryController@store');
    Route::put('categories/{category}', 'CategoryController@update');
    Route::delete('categories/{category}', 'CategoryController@delete');
});
Route::get('categories', 'CategoryController@index');
Route::get('categories/{category}', 'CategoryController@show');


// Studio description resources
Route::group(['middleware' => 'auth:api'], function() {
    Route::post('studios', 'StudioController@store');
    Route::put('studios/{studio}', 'StudioController@update');
    Route::delete('studios/{studio}', 'StudioController@delete');
});
Route::get('studios', 'StudioController@index');
Route::get('studios/{studio}', 'StudioController@show');


// Customer email resources
Route::group(['middleware' => 'auth:api'], function() {
    
});
Route::get('mails', 'MailController@index');
Route::get('mails/{mail}', 'MailController@show');
Route::put('mails/{mail}', 'MailController@update');
Route::delete('mails/{mail}', 'MailController@delete');
Route::post('mails', 'MailController@store');

Route::post('register', 'Auth\RegisterController@register');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout');

