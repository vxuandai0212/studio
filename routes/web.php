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

Route::get('/', 'PageController@renderHomePage');
Route::get('/about', 'PageController@renderAboutPage');
Route::get('/portfolio', 'PageController@renderPortfolioPage');
Route::get('/contact', 'PageController@renderContactPage');

Route::view('/admin/login', 'admin.authenticate.login');
Route::view('/admin/register', 'admin.authenticate.register');
// Route::middleware('auth:api')->get('/admin/dashboard', function () {
//     return view('admin.dashboard');
// });

Route::get('/admin/dashboard', 'AdminController@renderDashboard');
Route::get('/admin/photos', 'AdminController@renderPhoto');
Route::get('/admin/photos/{id}', 'AdminController@editPhoto');
Route::put('/admin/photos/{id}', 'AdminController@updatePhoto');
Route::get('/admin/mails', 'AdminController@renderMail');
Route::get('/admin/slides', 'AdminController@renderSlide');

// Route::view('/admin/dashboard', 'admin.dashboard');
// Route::view('/admin/photos', 'admin.photo');
// Route::view('/admin/mails', 'admin.mail');
// Route::view('/admin/slides', 'admin.slide');
