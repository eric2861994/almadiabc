<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Consultation extends Model {

	protected $table = 'konsultasi';
	protected $fillable = ['ID_pasien', 'tanggal', 'dokter', 'masalah', 'hasil_konsultasi', 'resep', 'harga'];

}
