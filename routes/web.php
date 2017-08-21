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
//     return view('index');
// });

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/contacts', 'ContactsController@index')->name('contacts');
Route::get('/about', 'AboutController@index')->name('about');
Route::get('/itemReclaim', 'itemReclaimController@index')->name('itemReclaim');
Route::resource('/item', 'ItemController');
Route::resource('/user', 'UserController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');





Route::get('/notworking')->name('cart.store');