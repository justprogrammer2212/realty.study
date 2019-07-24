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
    return view('index');
})->name('index');

Route::get('/offers', function () {
    return view('offers.offers');
})->name('offers');

Route::get('/offers/sale-houses', function () {
    return view('offers.sale-houses');
})->name('sale-houses');
