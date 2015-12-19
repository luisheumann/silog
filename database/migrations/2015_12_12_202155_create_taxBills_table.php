<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTaxBillsTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tax_bills', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('id');
			$table->integer('bill_id');
			$table->integer('tax_id');
			$table->integer('porcentaje');
			$table->decimal('valor_base', 10, 2);
			$table->decimal('total', 10, 2);
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
		Schema::drop('tax_bills');
	}

}
