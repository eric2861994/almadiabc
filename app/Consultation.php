<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Consultation extends Model {

	protected $fillable = ['id_patient', 'date', 'doctor', 'problem', 'result', 'recipe', 'price'];
	public $timestamps = false;

}
