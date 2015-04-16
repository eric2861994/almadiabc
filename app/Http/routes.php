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

Route::get('/',['middleware' => 'auth','as' => 'patient.index', 'uses' => 'PatientController@index']);
// patient
Route::get('pasien/tambah', ['middleware' => 'auth','as' => 'patient.create', 'uses' => 'PatientController@create']);
Route::post('pasien', ['middleware' => 'auth','as' => 'patient.store', 'uses' => 'PatientController@store']);
Route::get('pasien', ['middleware' => 'auth','as' => 'patient.index', 'uses' => 'PatientController@index']);
Route::get('pasien/{pasien}', ['middleware' => 'auth','as' => 'patient.show', 'uses' => 'PatientController@show']);
Route::get('pasien/{pasien}/ubah', ['middleware' => 'auth','as' => 'patient.edit', 'uses' => 'PatientController@edit']);
Route::put('pasien/{pasien}', ['middleware' => 'auth','as' => 'patient.update', 'uses' => 'PatientController@update']);
Route::get('pasien/{pasien}/hapus', ['middleware' => 'auth','as' => 'patient.get_destroy', 'uses' => 'PatientController@destroy']);


Route::get('pasien/{pasien}/showedit', ['middleware' => 'auth','as' => 'patient.show_edit', 'uses' => 'PatientController@showedit']);
Route::put('pasien/{pasien}/showupdate', ['middleware' => 'auth','as' => 'patient.show_update', 'uses' => 'PatientController@showupdate']);
Route::get('pasien/{konsultasi}/hapuskonsultasi', ['middleware' => 'auth','as' => 'patient.get_destroy_consultation', 'uses' => 'PatientController@destroy_consultation']);


// product
Route::get('produk/tambah', ['middleware' => 'auth','as' => 'product.create', 'uses' => 'ProductController@create']);
Route::post('produk', ['middleware' => 'auth','as' => 'product.store', 'uses' => 'ProductController@store']);
Route::get('produk', ['middleware' => 'auth','as' => 'product.index', 'uses' => 'ProductController@index']);
Route::get('produk/{produk}', ['middleware' => 'auth','as' => 'product.show', 'uses' => 'ProductController@show']);
Route::get('produk/{produk}/ubah', ['middleware' => 'auth','as' => 'product.edit', 'uses' => 'ProductController@edit']);
Route::put('produk/{produk}', ['middleware' => 'auth','as' => 'product.update', 'uses' => 'ProductController@update']);
Route::get('produk/{produk}/hapus', ['middleware' => 'auth', 'as' => 'product.get_destroy', 'uses' => 'ProductController@destroy']);


// treatment
Route::get('perawatan/tambah', ['middleware' => 'auth','as' => 'treatment.create', 'uses' => 'TreatmentController@create']);
Route::post('perawatan', ['middleware' => 'auth','as' => 'treatment.store', 'uses' => 'TreatmentController@store']);
Route::get('perawatan', ['middleware' => 'auth','as' => 'treatment.index', 'uses' => 'TreatmentController@index']);
Route::get('perawatan/{perawatan}', ['middleware' => 'auth','as' => 'treatment.show', 'uses' => 'TreatmentController@show']);
Route::get('perawatan/{perawatan}/ubah', ['middleware' => 'auth','as' => 'treatment.edit', 'uses' => 'TreatmentController@edit']);
Route::put('perawatan/{perawatan}', ['middleware' => 'auth','as' => 'treatment.update', 'uses' => 'TreatmentController@update']);
Route::get('perawatan/{perawatan}/hapus', ['middleware' => 'auth','as' => 'treatment.get_destroy', 'uses' => 'TreatmentController@destroy']);


// transaction purchase
Route::get('pembelian-produk/tambah', ['middleware' => 'auth','as' => 'transpurchase.create', 'uses' => 'TransPurchaseController@create']);
Route::post('pembelian-produk', ['middleware' => 'auth','as' => 'transpurchase.store', 'uses' => 'TransPurchaseController@store']);
Route::get('pembelian-produk', ['middleware' => 'auth','as' => 'transpurchase.index', 'uses' => 'TransPurchaseController@index']);
Route::get('pembelian-produk/{pembelian}', ['middleware' => 'auth','as' => 'transpurchase.show', 'uses' => 'TransPurchaseController@show']);
Route::get('pembelian-produk/{pembelian}/ubah', ['middleware' => 'auth','as' => 'transpurchase.edit', 'uses' => 'TransPurchaseController@edit']);
Route::put('pembelian-produk/{pembelian}', ['middleware' => 'auth','as' => 'transpurchase.update', 'uses' => 'TransPurchaseController@update']);
Route::get('pembelian-produk/{pembelian}/hapus', ['middleware' => 'auth','as' => 'transpurchase.get_destroy', 'uses' => 'TransPurchaseController@destroy']);

// transaction sell
Route::get('penjualan-produk/tambah', ['middleware' => 'auth','as' => 'transsell.create', 'uses' => 'TransSellController@create']);
Route::post('penjualan-produk', ['middleware' => 'auth','as' => 'transsell.store', 'uses' => 'TransSellController@store']);
Route::get('penjualan-produk', ['middleware' => 'auth','as' => 'transsell.index', 'uses' => 'TransSellController@index']);
Route::get('penjualan-produk/{penjualan}', ['middleware' => 'auth','as' => 'transsell.show', 'uses' => 'TransSellController@show']);
Route::get('penjualan-produk/{penjualan}/ubah', ['middleware' => 'auth','as' => 'transsell.edit', 'uses' => 'TransSellController@edit']);
Route::put('penjualan-produk/{penjualan}', ['middleware' => 'auth','as' => 'transsell.update', 'uses' => 'TransSellController@update']);
Route::get('penjualan-produk/{penjualan}/hapus', ['middleware' => 'auth','as' => 'transsell.get_destroy', 'uses' => 'TransSellController@destroy']);



// transaction treatment
Route::get('transaksi-perawatan/tambah', ['middleware' => 'auth','as' => 'transtreatment.create', 'uses' => 'TransTreatmentController@create']);
Route::post('transaksi-perawatan', ['middleware' => 'auth','as' => 'transtreatment.store', 'uses' => 'TransTreatmentController@store']);
Route::get('transaksi-perawatan', ['middleware' => 'auth','as' => 'transtreatment.index', 'uses' => 'TransTreatmentController@index']);
Route::get('transaksi-perawatan/{trperawatan}', ['middleware' => 'auth','as' => 'transtreatment.show', 'uses' => 'TransTreatmentController@show']);
Route::get('transaksi-perawatan/{trperawatan}/ubah', ['middleware' => 'auth','as' => 'transtreatment.edit', 'uses' => 'TransTreatmentController@edit']);
Route::put('transaksi-perawatan/{trperawatan}', ['middleware' => 'auth','as' => 'transtreatment.update', 'uses' => 'TransTreatmentController@update']);
Route::get('transaksi-perawatan/{trperawatan}/hapus', ['middleware' => 'auth','as' => 'transtreatment.get_destroy', 'uses' => 'TransTreatmentController@destroy']);


// transaction konsultasi
Route::get('konsultasi/tambah', ['middleware' => 'auth','as' => 'consultation.create', 'uses' => 'ConsultationController@create']);
Route::post('konsultasi', ['middleware' => 'auth','as' => 'consultation.store', 'uses' => 'ConsultationController@store']);
Route::get('konsultasi', ['middleware' => 'auth','as' => 'consultation.index', 'uses' => 'ConsultationController@index']);
Route::get('konsultasi/{konsultasi}', ['middleware' => 'auth','as' => 'consultation.show', 'uses' => 'ConsultationController@show']);
Route::get('konsultasi/{konsultasi}/ubah', ['middleware' => 'auth','as' => 'consultation.edit', 'uses' => 'ConsultationController@edit']);
Route::put('konsultasi/{konsultasi}', ['middleware' => 'auth','as' => 'consultation.update', 'uses' => 'ConsultationController@update']);
Route::get('konsultasi/{konsultasi}/hapus', ['middleware' => 'auth','as' => 'consultation.get_destroy', 'uses' => 'ConsultationController@destroy']);



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
