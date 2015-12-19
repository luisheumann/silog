<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRuleSalesTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('rules_sales', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('id', true);
			$table->string('nombre', 255);
			$table->string('descripcion', 255);
			$table->decimal('valor', 10, 2);
			$table->boolean('variacion');
			$table->dateTime('created_at');
			$table->dateTime('updated_at');
			$table->integer('id_usuario_cre');
			$table->integer('id_usuario_mod');
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
		Schema::drop('rules_sales');
	}

}
