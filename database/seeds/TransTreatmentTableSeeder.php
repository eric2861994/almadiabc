<?php

use Illuminate\Database\Seeder;
use App\TransTreatment;

class TransTreatmentTableSeeder extends Seeder
{     
  	public function run()
  	{
      	DB::table('trans_treatments')->delete();
       	TransTreatment::create(array('id' => NULL,
                    		         'id_patient' => 5,
                                     'id_treatment' => 3,
                                     'date' => '2015-04-11'
       	));
       	TransTreatment::create(array('id' => NULL,
                                     'id_patient' => 2,
                                     'id_treatment' => 1,
                                     'date' => '2015-04-12'
        ));
        TransTreatment::create(array('id' => NULL,
                                     'id_patient' => 3,
                                     'id_treatment' => 1,
                                     'date' => '2015-04-13'
        ));
        TransTreatment::create(array('id' => NULL,
                                     'id_patient' => 3,
                                     'id_treatment' => 1,
                                     'date' => '2015-04-15'
        ));
	}
}