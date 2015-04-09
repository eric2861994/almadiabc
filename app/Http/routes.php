<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::resource('dummy', 'DummyController');

Route::get('perawatan', 'TreatmentController@index');
Route::get('pasien', 'DummyController@indexPatient');
Route::get('pasien/konsultasi', 'DummyController@showPatient');
Route::get('penjualan', 'DummyController@indexTransactionSell');
Route::get('pembelian', 'DummyController@indexTransactionPurchase');
Route::get('produk', 'DummyController@indexProduct');
Route::get('konsultasi', 'DummyController@indexConsultation');


Route::get('/', 'WelcomeController@index');
Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
