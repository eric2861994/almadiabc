<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Treatment extends Model {

	protected $table = 'perawatan';
	protected $fillable = ['nama', 'deskirpsi', 'harga'];

}
