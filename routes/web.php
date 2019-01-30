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

Route::get('/', 'RootController@index')->name('root');
Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/verify/email', 'HomeController@verify_email')->name('verify_email');

Route::get('/category', 'CategoryController@index')->name('category');
Route::get('/category/new', 'CategoryController@create')->name('new_category');
Route::post('/category/new', 'CategoryController@store')->name('save_category');
Route::get('/category/add/default', 'CategoryController@add_default')->name('add_default_categories');

Route::get('/setting/add/default', 'SettingController@add_default')->name('add_default_settings');
