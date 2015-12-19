<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

class Kardex extends Model
{
    
	public $table = "kardex";
    

	public $fillable = [
	    "id",
		"product_detail_id",
		"id_sucursal",
		"id_proveedor",
		"fecha",
		"descripcion",
		"valor_unitario",
		"valor_entrada",
		"valor_salida",
		"valor_saldo",
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
		"product_detail_id" => "integer",
		"id_sucursal" => "integer",
		"id_proveedor" => "integer",
		"descripcion" => "string"
    ];

	public static $rules = [
	    
	];

}
