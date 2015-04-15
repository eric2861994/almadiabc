<?php namespace App;

use Illuminate\Database\Eloquent\Model;


class Product extends Model {

	public $timestamps = false;
	
	protected $fillable = ['name', 'stock', 'buy_price', 'sell_price', 'description'];

}
