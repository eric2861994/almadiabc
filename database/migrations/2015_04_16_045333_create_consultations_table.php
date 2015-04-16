<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConsultationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('consultations', function(Blueprint $table)
		{
			$table->increments('id');
			$table->unsignedInteger('id_patient');
			$table->dateTime('date');
			$table->string('doctor');
			$table->text('problem');
			$table->text('result');
			$table->text('recipe');
			$table->unsignedInteger('price');
		});
		Schema::table('consultations', function($table)
	    {
			$table->foreign('id_patient')
				->references('id')->on('patients');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('consultations');
	}

}
