<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransTreatmentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('trans_treatments', function(Blueprint $table)
		{
			$table->increments('id');
			$table->unsignedInteger('id_patient');
			$table->unsignedInteger('id_treatment');
			$table->dateTime('date');
		});
		Schema::table('trans_treatments', function($table)
	    {
			$table->foreign('id_patient')
				->references('id')->on('patients');
			$table->foreign('id_treatment')
				->references('id')->on('treatments');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('trans_treatments');
	}

}
