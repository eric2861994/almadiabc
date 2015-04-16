<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		$this->call('UserTableSeeder');
		$this->call('ProductTableSeeder');
		$this->call('TreatmentTableSeeder');
		$this->call('PatientTableSeeder');
		$this->call('TransSellTableSeeder');
		$this->call('TransPurchaseTableSeeder');
		$this->call('ConsultationTableSeeder');
		$this->call('TransTreatmentTableSeeder');
	}

}