<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{     
  	public function run()
  	{
    	DB::table('users')->delete();
     	User::create(array('id' => NULL,
                  		   'name' => 'Boss Almadina',
                           'email' => 'almadina_boss@gmail.com',
                           'password' => Hash::make('12345678')
       	));
       	User::create(array('id' => NULL,
                  		   'name' => 'Pegawai 1 Almadina',
                           'email' => 'almadina_pegawai1@gmail.com',
                           'password' => Hash::make('12345678')
       	));
       	User::create(array('id' => NULL,
                  		   'name' => 'Pegawai 2 Almadina',
                           'email' => 'almadina_pegawai2@gmail.com',
                           'password' => Hash::make('12345678')
       	));
	}
}