<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class TransPurchase extends Model {

	protected $table = 'transaksi_pembelian';
	protected $fillable = ['username', 'ID_produk', 'jumlah'];

}
