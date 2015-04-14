<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class TransSell extends Model {

	protected $table = 'transaksi_penjualan';
	protected $fillable = ['ID_pasien', 'ID_produk', 'jumlah'];

}
