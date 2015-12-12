<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

class ProductDetail extends Model
{
    
	public $table = "products_details";
    

	public $fillable = [
	    "id",
		"cod_product",
		"product_brand_id",
		"descripcion",
		"product_id",
		"rule_sale_id",
		"precio_compra",
		"precio_venta",
		"precio_promocion",
		"cantidad",
		"imagen",
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
		"cod_product" => "string",
		"product_brand_id" => "integer",
		"descripcion" => "string",
		"product_id" => "integer",
		"rule_sale_id" => "integer",
		"imagen" => "string",
		"id_usuario_cre" => "integer",
		"id_usuario_mod" => "integer"
    ];

	public static $rules = [
	    
	];

}
