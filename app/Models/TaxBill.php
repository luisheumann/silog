<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

class TaxBill extends Model
{
    
	public $table = "tax_bills";
    

	public $fillable = [
	    "id",
		"bill_id",
		"tax_id",
		"porcentaje",
		"valor_base",
		"total",
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
		"bill_id" => "integer",
		"tax_id" => "integer",
		"porcentaje" => "integer"
    ];

	public static $rules = [
	    
	];

}
