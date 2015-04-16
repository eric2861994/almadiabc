<?php

use Illuminate\Database\Seeder;
use App\Patient;

class PatientTableSeeder extends Seeder
{     
  	public function run()
  	{
      	DB::table('patients')->delete();
       	Patient::create(array('id' => NULL,
                    		      'name' => 'Mas Jaya',
                              'sex' => 'L',
                              'birthday' => '1973-08-17',
                              'phone' => '08123233231',
       	));
       	Patient::create(array('id' => NULL,
                              'name' => 'Mbak Jaya',
                              'sex' => 'P',
                              'birthday' => '1988-11-12',
                              'phone' => '08236263232',
        ));
        Patient::create(array('id' => NULL,
                              'name' => 'Pak Jaya',
                              'sex' => 'L',
                              'birthday' => '1977-01-28',
                              'phone' => '08972632631',
        ));
        Patient::create(array('id' => NULL,
                              'name' => 'Bu Jaya',
                              'sex' => 'P',
                              'birthday' => '1973-03-11',
                              'phone' => '08123123451',
        ));
        Patient::create(array('id' => NULL,
                              'name' => 'Kang Jaya',
                              'sex' => 'L',
                              'birthday' => '1981-05-15',
                              'phone' => '08123231238',
        ));
	}
}