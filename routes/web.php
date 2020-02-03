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
Route::get('/administrator/', 'AdministratorController@index');

Route::resource('about-us-page', 'AboutUsController');