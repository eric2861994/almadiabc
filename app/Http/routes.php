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
Route::model('perawatan', 'App\Treatment');
Route::model('produk', 'App\Product');

Route::resource('dummy', 'DummyController');

// patient
Route::get('pasien/tambah', ['as' => 'patient.create', 'uses' => 'PatientController@create']);
Route::post('pasien', ['as' => 'patient.store', 'uses' => 'PatientController@store']);
Route::get('pasien', ['as' => 'patient.index', 'uses' => 'PatientController@index']);
Route::get('pasien/{pasien}', ['as' => 'patient.show', 'uses' => 'PatientController@show']);
Route::get('pasien/{pasien}/ubah', ['as' => 'patient.edit', 'uses' => 'PatientController@edit']);
Route::put('pasien/{pasien}', ['as' => 'patient.update', 'uses' => 'PatientController@update']);
Route::get('pasien/{pasien}/hapus', ['as' => 'patient.get_destroy', 'uses' => 'PatientController@destroy']);


// product
Route::get('produk/tambah', ['as' => 'product.create', 'uses' => 'ProductController@create']);
Route::post('produk', ['as' => 'product.store', 'uses' => 'ProductController@store']);
Route::get('produk', ['as' => 'product.index', 'uses' => 'ProductController@index']);
Route::get('produk/{produk}', ['as' => 'product.show', 'uses' => 'ProductController@show']);
Route::get('produk/{produk}/ubah', ['as' => 'product.edit', 'uses' => 'ProductController@edit']);
Route::put('produk/{produk}', ['as' => 'product.update', 'uses' => 'ProductController@update']);
Route::get('produk/{produk}/hapus', ['as' => 'product.get_destroy', 'uses' => 'ProductController@destroy']);


// treatment
Route::get('perawatan/tambah', ['as' => 'treatment.create', 'uses' => 'TreatmentController@create']);
Route::post('perawatan', ['as' => 'treatment.store', 'uses' => 'TreatmentController@store']);
Route::get('perawatan', ['as' => 'treatment.index', 'uses' => 'TreatmentController@index']);
Route::get('perawatan/{perawatan}', ['as' => 'treatment.show', 'uses' => 'TreatmentController@show']);
Route::get('perawatan/{perawatan}/ubah', ['as' => 'treatment.edit', 'uses' => 'TreatmentController@edit']);
Route::put('perawatan/{perawatan}', ['as' => 'treatment.update', 'uses' => 'TreatmentController@update']);
Route::get('perawatan/{perawatan}/hapus', ['as' => 'treatment.get_destroy', 'uses' => 'TreatmentController@destroy']);



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
