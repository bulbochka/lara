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

/*Route::get('/', function () {return view('welcome');});*/
Route::get('/home/', 'MainController@index');
Route::get('/contact-page/', 'ContactController@index');
Route::get('/about-us-page/', 'AboutUsController@index');
Route::get('/myadministrator', 'MyAdministratorController@index');
Route::get('/admin', 'AdminController@index');
Route::get('/administrator', 'AdministratorController@index');
Route::get('/news-page-admin', 'NewsPageAdminController@index');
Route::get('/create-news-admin', 'CreateNewsAdminController@index');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::resource('about-us-page', 'AboutUsController');
Route::resource('create-news-admin', 'CreateNewsAdminController');
Route::resource('news-page-admin', 'NewsPageAdminController');
Route::resource('news-page', 'NewsController');
Route::resource('edit-news-admin', 'EditNewsController');
Route::resource('delete-news-admin', 'DeleteNewsController');
Route::resource('living-room-product', 'LivingRoomController');
Route::resource('kitchen-product', 'KitchenController');
Route::resource('bedroom-product', 'BedroomController');
Route::resource('bathroom-product', 'BathroomController');

Auth::routes();



//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');