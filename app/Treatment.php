<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Treatment extends Model {

	protected $fillable = ['name', 'description', 'price'];
	public $timestamps = false;

}
