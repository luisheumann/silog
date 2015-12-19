<?php namespace App\Http\Controllers\API;

use App\Http\Requests;
use App\Libraries\Repositories\TaxRepository;
use App\Models\Tax;
use Illuminate\Http\Request;
use Mitul\Controller\AppBaseController as AppBaseController;
use Response;

class TaxAPIController extends AppBaseController
{
	/** @var  TaxRepository */
	private $taxRepository;

	function __construct(TaxRepository $taxRepo)
	{
		$this->taxRepository = $taxRepo;
	}

	/**
	 * Display a listing of the Tax.
	 * GET|HEAD /taxes
	 *
	 * @return Response
	 */
	public function index()
	{
		$taxes = $this->taxRepository->all();

		return $this->sendResponse($taxes->toArray(), "Taxes retrieved successfully");
	}

	/**
	 * Show the form for creating a new Tax.
	 * GET|HEAD /taxes/create
	 *
	 * @return Response
	 */
	public function create()
	{
	}

	/**
	 * Store a newly created Tax in storage.
	 * POST /taxes
	 *
	 * @param Request $request
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		if(sizeof(Tax::$rules) > 0)
			$this->validateRequestOrFail($request, Tax::$rules);

		$input = $request->all();

		$taxes = $this->taxRepository->create($input);

		return $this->sendResponse($taxes->toArray(), "Tax saved successfully");
	}

	/**
	 * Display the specified Tax.
	 * GET|HEAD /taxes/{id}
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$tax = $this->taxRepository->apiFindOrFail($id);

		return $this->sendResponse($tax->toArray(), "Tax retrieved successfully");
	}

	/**
	 * Show the form for editing the specified Tax.
	 * GET|HEAD /taxes/{id}/edit
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function edit($id)
	{
		// maybe, you can return a template for JS
//		Errors::throwHttpExceptionWithCode(Errors::EDITION_FORM_NOT_EXISTS, ['id' => $id], static::getHATEOAS(['%id' => $id]));
	}

	/**
	 * Update the specified Tax in storage.
	 * PUT/PATCH /taxes/{id}
	 *
	 * @param  int              $id
	 * @param Request $request
	 *
	 * @return Response
	 */
	public function update($id, Request $request)
	{
		$input = $request->all();

		/** @var Tax $tax */
		$tax = $this->taxRepository->apiFindOrFail($id);

		$result = $this->taxRepository->updateRich($input, $id);

		$tax = $tax->fresh();

		return $this->sendResponse($tax->toArray(), "Tax updated successfully");
	}

	/**
	 * Remove the specified Tax from storage.
	 * DELETE /taxes/{id}
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		$this->taxRepository->apiDeleteOrFail($id);

		return $this->sendResponse($id, "Tax deleted successfully");
	}
}
