<?php

use Illuminate\Database\Seeder;
use App\Treatment;

class TreatmentTableSeeder extends Seeder
{     
  	public function run()
  	{
      	DB::table('treatments')->delete();
       	Treatment::create(array('id' => NULL,
                    		        'name' => 'Lulur',
                                'price' => 240000,
                                'description' => 'Luluran Asik'
       	));
       	Treatment::create(array('id' => NULL,
                  		          'name' => 'Pijat mantap 1 jam',
                                'price' => 70000,
                                'description' => 'Pijat 2 jam enak beud'
       	));
       	Treatment::create(array('id' => NULL,
                  		          'name' => 'Pijat mantap 2 jam',
                                'price' => 110000,
                                'description' => 'Pijat 2 jam enak beud'
       	));
	}
}