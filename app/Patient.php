<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model {

	protected $table = 'pasien';
	protected $fillable = ['nama', 'j_kelamin', 'tanggal_lahir', 'no_telepon'];

}
