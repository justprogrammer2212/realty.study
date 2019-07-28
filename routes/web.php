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

Route::get('/', 'IndexController@index')->name('index');

Route::get('/offers', 'OffersController@offers')->name('offers');

Route::get('/', 'ArticlesController@articles')->name('index');

Route::get('/offer/{show}', 'OffersController@offer')->name('show');
