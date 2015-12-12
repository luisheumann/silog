<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

class PurchaseOrderDetail extends Model
{
    
	public $table = "purchase_order_details";
    

	public $fillable = [
	    "id",
		"purchese_order_id",
		"cantidad",
		"valor_unitario",
		"valor_total",
		"product_detail_id",
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
		"purchese_order_id" => "integer",
		"product_detail_id" => "integer"
    ];

	public static $rules = [
	    
	];

}
