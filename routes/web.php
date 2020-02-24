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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home/', 'MainController@index');
Route::get('/contact-page/', 'ContactController@index');
Route::get('/news-page/', 'NewsController@index');
Route::get('/about-us-page/', 'AboutUsController@index');

Route::resource('about-us-page', 'AboutUsController');
Route::resource('register-page-admin', 'AdminRegisterController');

Route::get('/admin', 'AdminLoginController@index');
Route::get('/login-page-admin', 'AdminLoginController@index');
Route::get('/register-page-admin', 'AdminRegisterController@index');
Route::post('', 'AdminRegisterController@store')->name('admin-register.store');
//Route::post('', 'AdminLoginController@store')->name('admin-login.store');
Route::get('/administrator', 'AdministratorController@index');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');