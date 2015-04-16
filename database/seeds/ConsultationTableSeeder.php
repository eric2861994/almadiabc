<?php

use Illuminate\Database\Seeder;
use App\Consultation;

class ConsultationTableSeeder extends Seeder
{     
  	public function run()
  	{
      	DB::table('consultations')->delete();
       	Consultation::create(array('id' => NULL,
                		           'id_patient' => 1,
                                   'date' => '2015-04-11',
                                   'doctor' => 'Widya',
                                   'problem' => 'Kulit mengkerut',
                                   'result' => 'Kulit mengindah',
                                   'recipe' => 'Obat salep',
                                   'price' => 250000
       	));
       	Consultation::create(array('id' => NULL,
                                   'id_patient' => 4,
                                   'date' => '2015-03-22',
                                   'doctor' => 'Widya',
                                   'problem' => 'Kulit bercak',
                                   'result' => 'Kulit tidak bercak',
                                   'recipe' => '-',
                                   'price' => 300000
        ));
        Consultation::create(array('id' => NULL,
                                   'id_patient' => 1,
                                   'date' => '2015-04-14',
                                   'doctor' => 'Widya',
                                   'problem' => 'Kulit mengkerut lagi',
                                   'result' => 'Kulit mengindah',
                                   'recipe' => 'Obat salep',
                                   'price' => 250000
        ));
        Consultation::create(array('id' => NULL,
                                   'id_patient' => 2,
                                   'date' => '2015-04-13',
                                   'doctor' => 'Atik',
                                   'problem' => 'Punggung sakit',
                                   'result' => 'Punggung tidak sakit',
                                   'recipe' => 'Obat kumur',
                                   'price' => 320000
        ));
	}
}