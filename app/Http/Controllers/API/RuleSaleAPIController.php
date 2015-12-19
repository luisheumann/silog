<?php namespace App\Http\Controllers\API;

use App\Http\Requests;
use App\Libraries\Repositories\RuleSaleRepository;
use App\Models\RuleSale;
use Illuminate\Http\Request;
use Mitul\Controller\AppBaseController as AppBaseController;
use Response;

class RuleSaleAPIController extends AppBaseController
{
	/** @var  RuleSaleRepository */
	private $ruleSaleRepository;

	function __construct(RuleSaleRepository $ruleSaleRepo)
	{
		$this->ruleSaleRepository = $ruleSaleRepo;
	}

	/**
	 * Display a listing of the RuleSale.
	 * GET|HEAD /ruleSales
	 *
	 * @return Response
	 */
	public function index()
	{
		$ruleSales = $this->ruleSaleRepository->all();

		return $this->sendResponse($ruleSales->toArray(), "RuleSales retrieved successfully");
	}

	/**
	 * Show the form for creating a new RuleSale.
	 * GET|HEAD /ruleSales/create
	 *
	 * @return Response
	 */
	public function create()
	{
	}

	/**
	 * Store a newly created RuleSale in storage.
	 * POST /ruleSales
	 *
	 * @param Request $request
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		if(sizeof(RuleSale::$rules) > 0)
			$this->validateRequestOrFail($request, RuleSale::$rules);

		$input = $request->all();

		$ruleSales = $this->ruleSaleRepository->create($input);

		return $this->sendResponse($ruleSales->toArray(), "RuleSale saved successfully");
	}

	/**
	 * Display the specified RuleSale.
	 * GET|HEAD /ruleSales/{id}
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$ruleSale = $this->ruleSaleRepository->apiFindOrFail($id);

		return $this->sendResponse($ruleSale->toArray(), "RuleSale retrieved successfully");
	}

	/**
	 * Show the form for editing the specified RuleSale.
	 * GET|HEAD /ruleSales/{id}/edit
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
	 * Update the specified RuleSale in storage.
	 * PUT/PATCH /ruleSales/{id}
	 *
	 * @param  int              $id
	 * @param Request $request
	 *
	 * @return Response
	 */
	public function update($id, Request $request)
	{
		$input = $request->all();

		/** @var RuleSale $ruleSale */
		$ruleSale = $this->ruleSaleRepository->apiFindOrFail($id);

		$result = $this->ruleSaleRepository->updateRich($input, $id);

		$ruleSale = $ruleSale->fresh();

		return $this->sendResponse($ruleSale->toArray(), "RuleSale updated successfully");
	}

	/**
	 * Remove the specified RuleSale from storage.
	 * DELETE /ruleSales/{id}
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		$this->ruleSaleRepository->apiDeleteOrFail($id);

		return $this->sendResponse($id, "RuleSale deleted successfully");
	}
}
