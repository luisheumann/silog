<?php namespace App\Http\Requests;

use App\Http\Requests\Request;
use App\Models\StateBill;

class UpdateStateBillRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return StateBill::$rules;
	}

}
