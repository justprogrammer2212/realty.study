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

Route::get('/offers/add', 'OffersController@addOffer')->name('addOffer');

Route::post('/offers/add', 'OffersController@submitOffer');

Route::get('/offers/edit/{offers_id}', 'OffersController@editOffer')->name('editOffer');

Route::post('/offers/edit/{offers_id}', 'OffersController@updateOffer')->name('updateOffer');

Route::get('/offers/delete/{offers_id}', 'OffersController@deleteOffer')->name('deleteOffer');


Route::group(['prefix' => '/articles'], function() {

    Route::get('/add', 'ArticlesController@addArticle')->name('addArticle')->middleware('check_auth');

    Route::post('/add', 'ArticlesController@submitArticle')->middleware('check_auth');

});



Route::get('/articles/edit/{article_id}', 'ArticlesController@editArticle')->name('editArticle');

Route::post('/articles/edit/{article_id}', 'ArticlesController@submitedit')->name('updateArticle');

Route::get('/articles/delete/{id_articles}', 'ArticlesController@deleteArticle')->name('deleteArticle');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
