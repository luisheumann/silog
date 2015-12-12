<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductDetailsTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('products_details', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('id', true);
			$table->string('cod_product', 255);
			$table->integer('product_brand_id');
			$table->text('descripcion');
			$table->integer('product_id');
			$table->integer('rule_sale_id');
			$table->decimal('precio_compra', 10, 2);
			$table->decimal('precio_venta', 10, 2);
			$table->decimal('precio_promocion', 10, 2);
			$table->decimal('cantidad', 10, 2);
			$table->string('imagen', 255);
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
		Schema::drop('products_details');
	}

}
