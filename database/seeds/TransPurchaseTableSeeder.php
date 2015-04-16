<?php

use Illuminate\Database\Seeder;
use App\TransPurchase;

class TransPurchaseTableSeeder extends Seeder
{     
  	public function run()
  	{
      	DB::table('trans_purchases')->delete();
       	TransPurchase::create(array('id' => NULL,
                    		        'id_user' => 1,
                                    'id_product' => 5,
                                    'date' => '2015-04-15',
                                    'quantity' => 10
       	));
       	TransPurchase::create(array('id' => NULL,
                                    'id_user' => 2,
                                    'id_product' => 1,
                                    'date' => '2015-04-13',
                                    'quantity' => 20
        ));
        TransPurchase::create(array('id' => NULL,
                                    'id_user' => 2,
                                    'id_product' => 2,
                                    'date' => '2015-04-11',
                                    'quantity' => 10
        ));
        TransPurchase::create(array('id' => NULL,
                                    'id_user' => 1,
                                    'id_product' => 2,
                                    'date' => '2015-04-14',
                                    'quantity' => 30
        ));
        TransPurchase::create(array('id' => NULL,
                                    'id_user' => 1,
                                    'id_product' => 4,
                                    'date' => '2015-04-11',
                                    'quantity' => 15
        ));
	}
}