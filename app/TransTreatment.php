<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class TransTreatment extends Model {

	protected $fillable = ['id_patient', 'id_treatment', 'date'];
	public $timestamps = false;

}
