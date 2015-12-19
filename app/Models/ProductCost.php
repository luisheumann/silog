<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

class ProductCost extends Model
{
    
	public $table = "products_costs";
    

	public $fillable = [
	    "id",
		"id_sucursal",
		"product_detail_id",
		"rule_sale_id",
		"fecha_inicio",
		"fecha_fin",
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
		"id_sucursal" => "integer",
		"product_detail_id" => "integer",
		"rule_sale_id" => "integer"
    ];

	public static $rules = [
	    
	];

}
