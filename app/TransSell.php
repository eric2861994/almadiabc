<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class TransSell extends Model {

	protected $fillable = ['ID_pasien', 'ID_produk', 'jumlah'];

}
