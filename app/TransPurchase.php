<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
class TransPurchase extends Model {

	protected $fillable = ['id_user', 'id_product', 'quantity'];
	public $timestamps=false;

}
