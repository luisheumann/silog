<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

class Product extends Model
{
    
	public $table = "products";
    

	public $fillable = [
	    "id",
		"nombre",
		"unit_id",
		"category_id",
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
		"nombre" => "string",
		"unit_id" => "integer",
		"category_id" => "integer",
		"id_usuario_cre" => "integer",
		"id_usuario_mod" => "integer"
    ];

	public static $rules = [
	    
	];

}
