<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePurchaseOrdersTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('purchase_orders', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('id');
			$table->integer('id_proveedor');
			$table->dateTime('fecha_pedido');
			$table->dateTime('fecha_pago');
			$table->decimal('nro_orden_compra', 10, 0);
			$table->text('observacion');
			$table->integer('id_sucursal');
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
		Schema::drop('purchase_orders');
	}

}
