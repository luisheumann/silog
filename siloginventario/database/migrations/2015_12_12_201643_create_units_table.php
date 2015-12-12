<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUnitsTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('units', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('id', true);
			$table->string('nombre', 255);
			$table->dateTime('created_at');
			$table->dateTime('updated_at');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('units');
	}

}
