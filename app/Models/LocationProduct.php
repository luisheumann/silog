<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

class LocationProduct extends Model
{
    
	public $table = "locations_products";
    

	public $fillable = [
	    "id",
		"product_detail_id",
		"location_id",
		"saldo",
		"cantidad_max",
		"cantidad_min",
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
		"product_detail_id" => "integer",
		"location_id" => "integer",
		"id_usuario_cre" => "integer",
		"id_usuario_mod" => "integer"
    ];

	public static $rules = [
	    
	];

}
