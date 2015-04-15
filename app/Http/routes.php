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
Route::get('tr_perawatan', 'DummyController@indexTransactionTreatment');

// patient
Route::get('pasien', 'PatientController@index');
Route::get('pasien/tambah', 'PatientController@create');
Route::post('pasien', 'PatientController@store');


Route::get('pasien/konsultasi', 'DummyController@showPatient');
Route::get('penjualan', 'TransSellController@index');
Route::get('pembelian', 'TransPurchaseController@index');
Route::get('produk', 'ProductController@index');
Route::get('konsultasi', 'ConsultationController@index');


Route::get('/', 'WelcomeController@index');
Route::get('home', 'HomeController@index');
Route::get('login', function()
	{
		return View::make('auth.login');
	});

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
