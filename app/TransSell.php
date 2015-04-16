<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class TransSell extends Model {

	protected $fillable = ['id_patient', 'id_product', 'quantity'];
	public $timestamps = false;

}
