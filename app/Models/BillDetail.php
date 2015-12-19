<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

class BillDetail extends Model
{
    
	public $table = "bills_details";
    

	public $fillable = [
	    "id",
		"bill_id",
		"product_detail_id",
		"cantidad",
		"valor_unitario",
		"valor_total",
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
		"product_detail_id" => "integer"
    ];

	public static $rules = [
	    
	];

}
