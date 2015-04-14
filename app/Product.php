<?php namespace App;

use Illuminate\Database\Eloquent\Model;


class Product extends Model {

	protected $table = 'produk';
	protected $fillable = ['nama', 'deskripsi', 'stok', 'harga_beli', 'harga_jual'];

}
