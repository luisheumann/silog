<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

class Bill extends Model
{
    
	public $table = "bills";
    

	public $fillable = [
	    "id",
		"forms_payments_id",
		"id_proveedor",
		"id_persona",
		"id_vehiculo",
		"fecha",
		"numero_factura",
		"valor_total",
		"valor_impuesto",
		"valor_factura",
		"valor_abono",
		"saldo_actual",
		"state_bill_id",
		"fecha_cobro",
		"observacion",
		"resolucion",
		"tax_bill_id",
		"valor_descuento",
		"created_at",
		"updated_at",
		"id_usuario_cre",
		"id_usuario_mod"
	];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        "id" => "integer",
		"forms_payments_id" => "integer",
		"id_proveedor" => "integer",
		"id_persona" => "integer",
		"state_bill_id" => "integer",
		"observacion" => "string",
		"tax_bill_id" => "integer",
		"valor_descuento" => "integer",
		"id_usuario_cre" => "integer"
    ];

	public static $rules = [
	    
	];

}
