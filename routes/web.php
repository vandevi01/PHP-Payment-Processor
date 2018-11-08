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

Route::get('/', 'PaymentController@index')->name('checkoutPage');
Route::post('/', 'PaymentController@saveCheckout')->name('saveCheckout');
Route::get('/complete', 'PaymentController@complete')->name('completePage');
Route::get('/failure', 'PaymentController@failure')->name('failurePage');
