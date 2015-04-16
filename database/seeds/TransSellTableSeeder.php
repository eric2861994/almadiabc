<?php

use Illuminate\Database\Seeder;
use App\TransSell;

class TransSellTableSeeder extends Seeder
{     
  	public function run()
  	{
      	DB::table('trans_sells')->delete();
       	TransSell::create(array('id' => NULL,
                    		        'id_patient' => 1,
                                'id_product' => 2,
                                'date' => '2015-04-15',
                                'quantity' => 4
       	));
       	TransSell::create(array('id' => NULL,
                                'id_patient' => 1,
                                'id_product' => 1,
                                'date' => '2015-04-14',
                                'quantity' => 1
        ));
        TransSell::create(array('id' => NULL,
                                'id_patient' => 2,
                                'id_product' => 4,
                                'date' => '2015-04-13',
                                'quantity' => 1
        ));
        TransSell::create(array('id' => NULL,
                                'id_patient' => 4,
                                'id_product' => 1,
                                'date' => '2015-04-15',
                                'quantity' => 5
        ));
        TransSell::create(array('id' => NULL,
                                'id_patient' => 2,
                                'id_product' => 1,
                                'date' => '2015-04-15',
                                'quantity' => 3
        ));
	}
}