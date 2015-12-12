<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

class PurchaseOrder extends Model
{
    
	public $table = "purchase_orders";
    

	public $fillable = [
	    "id",
		"id_proveedor",
		"fecha_pedido",
		"fecha_pago",
		"nro_orden_compra",
		"observacion",
		"id_sucursal",
		"created_at",
		"updated_at"
	];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        "id" => "integer",
		"id_proveedor" => "integer",
		"observacion" => "string",
		"id_sucursal" => "integer"
    ];

	public static $rules = [
	    
	];

}
