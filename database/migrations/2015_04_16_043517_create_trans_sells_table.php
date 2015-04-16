<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransSellsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('trans_sells', function(Blueprint $table)
		{
			$table->increments('id');
			$table->unsignedInteger('id_patient');
			$table->unsignedInteger('id_product');
			$table->dateTime('date');
			$table->unsignedInteger('quantity');
		});
		Schema::table('trans_sells', function($table)
	    {
			$table->foreign('id_patient')
				->references('id')->on('patients');
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
		Schema::drop('trans_sells');
	}

}
