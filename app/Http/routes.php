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
Route::model('pembelian', 'App\TransPurchase');
Route::model('penjualan', 'App\TransSell');
Route::model('trperawatan', 'App\TransTreatment');
Route::model('konsultasi', 'App\Consultation');

Route::resource('dummy', 'DummyController');

// patient
Route::get('pasien/tambah', ['as' => 'patient.create', 'uses' => 'PatientController@create']);
Route::post('pasien', ['as' => 'patient.store', 'uses' => 'PatientController@store']);
Route::get('pasien', ['as' => 'patient.index', 'uses' => 'PatientController@index']);
Route::get('pasien/{pasien}', ['as' => 'patient.show', 'uses' => 'PatientController@show']);
Route::get('pasien/{pasien}/ubah', ['as' => 'patient.edit', 'uses' => 'PatientController@edit']);
Route::put('pasien/{pasien}', ['as' => 'patient.update', 'uses' => 'PatientController@update']);
Route::get('pasien/{pasien}/hapus', ['as' => 'patient.get_destroy', 'uses' => 'PatientController@destroy']);


Route::get('pasien/{pasien}/showedit', ['as' => 'patient.show_edit', 'uses' => 'PatientController@showedit']);
Route::put('pasien/{pasien}/showupdate', ['as' => 'patient.show_update', 'uses' => 'PatientController@showupdate']);
Route::get('pasien/{konsultasi}/hapuskonsultasi', ['as' => 'patient.get_destroy_consultation', 'uses' => 'PatientController@destroy_consultation']);


// product
Route::get('produk/tambah', ['as' => 'product.create', 'uses' => 'ProductController@create']);
Route::post('produk', ['as' => 'product.store', 'uses' => 'ProductController@store']);
Route::get('produk', ['as' => 'product.index', 'uses' => 'ProductController@index']);
Route::get('produk/{produk}', ['as' => 'product.show', 'uses' => 'ProductController@show']);
Route::get('produk/{produk}/ubah', ['as' => 'product.edit', 'uses' => 'ProductController@edit']);
Route::put('produk/{produk}', ['as' => 'product.update', 'uses' => 'ProductController@update']);
Route::get('produk/{produk}/hapus', ['middleware' => 'auth', 'as' => 'product.get_destroy', 'uses' => 'ProductController@destroy']);


// treatment
Route::get('perawatan/tambah', ['as' => 'treatment.create', 'uses' => 'TreatmentController@create']);
Route::post('perawatan', ['as' => 'treatment.store', 'uses' => 'TreatmentController@store']);
Route::get('perawatan', ['as' => 'treatment.index', 'uses' => 'TreatmentController@index']);
Route::get('perawatan/{perawatan}', ['as' => 'treatment.show', 'uses' => 'TreatmentController@show']);
Route::get('perawatan/{perawatan}/ubah', ['as' => 'treatment.edit', 'uses' => 'TreatmentController@edit']);
Route::put('perawatan/{perawatan}', ['as' => 'treatment.update', 'uses' => 'TreatmentController@update']);
Route::get('perawatan/{perawatan}/hapus', ['as' => 'treatment.get_destroy', 'uses' => 'TreatmentController@destroy']);


// transaction purchase
Route::get('pembelian-produk/tambah', ['as' => 'transpurchase.create', 'uses' => 'TransPurchaseController@create']);
Route::post('pembelian-produk', ['as' => 'transpurchase.store', 'uses' => 'TransPurchaseController@store']);
Route::get('pembelian-produk', ['as' => 'transpurchase.index', 'uses' => 'TransPurchaseController@index']);
Route::get('pembelian-produk/{pembelian}', ['as' => 'transpurchase.show', 'uses' => 'TransPurchaseController@show']);
Route::get('pembelian-produk/{pembelian}/ubah', ['as' => 'transpurchase.edit', 'uses' => 'TransPurchaseController@edit']);
Route::put('pembelian-produk/{pembelian}', ['as' => 'transpurchase.update', 'uses' => 'TransPurchaseController@update']);
Route::get('pembelian-produk/{pembelian}/hapus', ['as' => 'transpurchase.get_destroy', 'uses' => 'TransPurchaseController@destroy']);

// transaction sell
Route::get('penjualan-produk/tambah', ['as' => 'transsell.create', 'uses' => 'TransSellController@create']);
Route::post('penjualan-produk', ['as' => 'transsell.store', 'uses' => 'TransSellController@store']);
Route::get('penjualan-produk', ['as' => 'transsell.index', 'uses' => 'TransSellController@index']);
Route::get('penjualan-produk/{penjualan}', ['as' => 'transsell.show', 'uses' => 'TransSellController@show']);
Route::get('penjualan-produk/{penjualan}/ubah', ['as' => 'transsell.edit', 'uses' => 'TransSellController@edit']);
Route::put('penjualan-produk/{penjualan}', ['as' => 'transsell.update', 'uses' => 'TransSellController@update']);
Route::get('penjualan-produk/{penjualan}/hapus', ['as' => 'transsell.get_destroy', 'uses' => 'TransSellController@destroy']);



// transaction treatment
Route::get('transaksi-perawatan/tambah', ['as' => 'transtreatment.create', 'uses' => 'TransTreatmentController@create']);
Route::post('transaksi-perawatan', ['as' => 'transtreatment.store', 'uses' => 'TransTreatmentController@store']);
Route::get('transaksi-perawatan', ['as' => 'transtreatment.index', 'uses' => 'TransTreatmentController@index']);
Route::get('transaksi-perawatan/{trperawatan}', ['as' => 'transtreatment.show', 'uses' => 'TransTreatmentController@show']);
Route::get('transaksi-perawatan/{trperawatan}/ubah', ['as' => 'transtreatment.edit', 'uses' => 'TransTreatmentController@edit']);
Route::put('transaksi-perawatan/{trperawatan}', ['as' => 'transtreatment.update', 'uses' => 'TransTreatmentController@update']);
Route::get('transaksi-perawatan/{trperawatan}/hapus', ['as' => 'transtreatment.get_destroy', 'uses' => 'TransTreatmentController@destroy']);


// transaction treatment
Route::get('konsultasi/tambah', ['as' => 'consultation.create', 'uses' => 'ConsultationController@create']);
Route::post('konsultasi', ['as' => 'consultation.store', 'uses' => 'ConsultationController@store']);
Route::get('konsultasi', ['as' => 'consultation.index', 'uses' => 'ConsultationController@index']);
Route::get('konsultasi/{konsultasi}', ['as' => 'consultation.show', 'uses' => 'ConsultationController@show']);
Route::get('konsultasi/{konsultasi}/ubah', ['as' => 'consultation.edit', 'uses' => 'ConsultationController@edit']);
Route::put('konsultasi/{konsultasi}', ['as' => 'consultation.update', 'uses' => 'ConsultationController@update']);
Route::get('konsultasi/{konsultasi}/hapus', ['as' => 'consultation.get_destroy', 'uses' => 'ConsultationController@destroy']);



Route::get('/', function() {
	$user = \Auth::user();
	
	if (is_null($user))
		return redirect(url('/auth/login'));
	else
		return redirect()->route('patient.index');
});
// Route::get('home', 'HomeController@index');
// Route::get('login', function()
	// {
		// return View::make('auth.login');
	// });

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
