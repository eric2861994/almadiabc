<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductTableSeeder extends Seeder
{     
  	public function run()
  	{
        DB::table('products')->delete();
       	Product::create(array('id' => NULL,
                    		   'name' => 'Sabun Lux',
                           'stock' => 23,
                           'buy_price' => 21000,
                           'sell_price' => 25000,
                           'description' => 'Sabun mandi super wangi'
       	));
       	Product::create(array('id' => NULL,
                           'name' => 'Lotion Ambifur',
                           'stock' => 15,
                           'buy_price' => 46000,
                           'sell_price' => 52000,
                           'description' => 'Lotion pewangi tubuh'
        ));
        Product::create(array('id' => NULL,
                           'name' => 'Sabun Lifeboy',
                           'stock' => 40,
                           'buy_price' => 12000,
                           'sell_price' => 15000,
                           'description' => 'Sabun standar ajah'
        ));
        Product::create(array('id' => NULL,
                           'name' => 'Sikat gigi kodomo',
                           'stock' => 9,
                           'buy_price' => 7000,
                           'sell_price' => 10000,
                           'description' => 'Sikat gigi favorit anak'
        ));
        Product::create(array('id' => NULL,
                           'name' => 'Shampo Dove',
                           'stock' => 37,
                           'buy_price' => 31000,
                           'sell_price' => 36000,
                           'description' => 'Shampo cap angsa'
        ));
        Product::create(array('id' => NULL,
                           'name' => 'Pepsodent',
                           'stock' => 19,
                           'buy_price' => 17000,
                           'sell_price' => 21000,
                           'description' => 'Pasta gigi enak'
        ));
        Product::create(array('id' => NULL,
                           'name' => 'Parfun Axe',
                           'stock' => 22,
                           'buy_price' => 23000,
                           'sell_price' => 30000,
                           'description' => 'Parfum wangi melati'
        ));
	}
}