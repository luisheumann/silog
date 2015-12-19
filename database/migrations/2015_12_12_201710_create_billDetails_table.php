<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBillDetailsTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('bills_details', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('id', true);
			$table->integer('bill_id');
			$table->integer('product_detail_id');
			$table->decimal('cantidad', 10, 2);
			$table->decimal('valor_unitario', 10, 2);
			$table->decimal('valor_total', 10, 2);
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
		Schema::drop('bills_details');
	}

}
