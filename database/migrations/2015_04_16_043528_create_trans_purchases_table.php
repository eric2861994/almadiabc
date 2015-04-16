<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransPurchasesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('trans_purchases', function(Blueprint $table)
		{
			$table->increments('id');
			$table->unsignedInteger('id_user');
			$table->unsignedInteger('id_product');
			$table->dateTime('date');
			$table->unsignedInteger('quantity');
		});
		Schema::table('trans_purchases', function($table)
	    {
			$table->foreign('id_user')
				->references('id')->on('users');
			$table->foreign('id_product')
				->references('id')->on('products');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('trans_purchases');
	}

}
