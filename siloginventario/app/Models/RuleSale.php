<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

class RuleSale extends Model
{
    
	public $table = "rules_sales";
    

	public $fillable = [
	    "id",
		"nombre",
		"descripcion",
		"valor",
		"variacion",
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
		"descripcion" => "string",
		"variacion" => "boolean",
		"id_usuario_cre" => "integer",
		"id_usuario_mod" => "integer"
    ];

	public static $rules = [
	    
	];

}
