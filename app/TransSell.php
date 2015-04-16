<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class TransSell extends Model {

	protected $fillable = ['id_patient', 'id_product', 'quantity'];
	public $timestamps = false;

}
