<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

class Brand extends Model
{
    
	public $table = "brands";
    

	public $fillable = [
	    "id",
		"nombre",
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
		"nombre" => "string"
    ];

	public static $rules = [
	    
	];

}
