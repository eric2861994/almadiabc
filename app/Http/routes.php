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

Route::model('pasien', 'App\Patient');

Route::resource('dummy', 'DummyController');

Route::get('perawatan', 'TreatmentController@index');
Route::get('tr_perawatan', 'DummyController@indexTransactionTreatment');

// patient
Route::get('pasien/tambah', ['as' => 'patient.create', 'uses' => 'PatientController@create']);
Route::post('pasien', ['as' => 'patient.store', 'uses' => 'PatientController@store']);
Route::get('pasien', ['as' => 'patient.index', 'uses' => 'PatientController@index']);
Route::get('pasien/{pasien}', ['as' => 'patient.show', 'uses' => 'PatientController@show']);
Route::get('pasien/{pasien}/ubah', ['as' => 'patient.edit', 'uses' => 'PatientController@edit']);
Route::put('pasien/{pasien}', ['as' => 'patient.update', 'uses' => 'PatientController@update']);
Route::get('pasien/{pasien}/hapus', ['as' => 'patient.get_destroy', 'uses' => 'PatientController@destroy']);


// product
Route::get('produk', ['as' => 'product.index', 'uses' => 'ProductController@index']);
Route::get('produk/tambah', ['as' => 'product.create', 'uses' => 'ProductController@create']);
Route::post('produk', ['as' => 'product.store', 'uses' => 'ProductController@store']);

Route::get('penjualan', 'TransSellController@index');
Route::get('pembelian', 'TransPurchaseController@index');
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
