<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{     
  	public function run()
  	{
      	DB::table('users')->delete();
       	User::create(array('id' => NULL,
                   		     'username' => 'boss',
                           'password' => Hash::make('12345678')
       	));
       	User::create(array('id' => NULL,
                  		     'username' => 'pegawai1',
                           'password' => Hash::make('12345678')
       	));
       	User::create(array('id' => NULL,
                           'username' => 'pegawai2',
                           'password' => Hash::make('12345678')
        ));
	}
}