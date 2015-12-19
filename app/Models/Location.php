<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

class Location extends Model
{
    
	public $table = "locations";
    

	public $fillable = [
	    "id",
		"id_sucursal",
		"detalle",
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
		"detalle" => "string"
    ];

	public static $rules = [
	    
	];

}
