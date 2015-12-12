<?php namespace App\Http\Controllers\API;

use App\Http\Requests;
use App\Libraries\Repositories\TaxBillRepository;
use App\Models\TaxBill;
use Illuminate\Http\Request;
use Mitul\Controller\AppBaseController as AppBaseController;
use Response;

class TaxBillAPIController extends AppBaseController
{
	/** @var  TaxBillRepository */
	private $taxBillRepository;

	function __construct(TaxBillRepository $taxBillRepo)
	{
		$this->taxBillRepository = $taxBillRepo;
	}

	/**
	 * Display a listing of the TaxBill.
	 * GET|HEAD /taxBills
	 *
	 * @return Response
	 */
	public function index()
	{
		$taxBills = $this->taxBillRepository->all();

		return $this->sendResponse($taxBills->toArray(), "TaxBills retrieved successfully");
	}

	/**
	 * Show the form for creating a new TaxBill.
	 * GET|HEAD /taxBills/create
	 *
	 * @return Response
	 */
	public function create()
	{
	}

	/**
	 * Store a newly created TaxBill in storage.
	 * POST /taxBills
	 *
	 * @param Request $request
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		if(sizeof(TaxBill::$rules) > 0)
			$this->validateRequestOrFail($request, TaxBill::$rules);

		$input = $request->all();

		$taxBills = $this->taxBillRepository->create($input);

		return $this->sendResponse($taxBills->toArray(), "TaxBill saved successfully");
	}

	/**
	 * Display the specified TaxBill.
	 * GET|HEAD /taxBills/{id}
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$taxBill = $this->taxBillRepository->apiFindOrFail($id);

		return $this->sendResponse($taxBill->toArray(), "TaxBill retrieved successfully");
	}

	/**
	 * Show the form for editing the specified TaxBill.
	 * GET|HEAD /taxBills/{id}/edit
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
	 * Update the specified TaxBill in storage.
	 * PUT/PATCH /taxBills/{id}
	 *
	 * @param  int              $id
	 * @param Request $request
	 *
	 * @return Response
	 */
	public function update($id, Request $request)
	{
		$input = $request->all();

		/** @var TaxBill $taxBill */
		$taxBill = $this->taxBillRepository->apiFindOrFail($id);

		$result = $this->taxBillRepository->updateRich($input, $id);

		$taxBill = $taxBill->fresh();

		return $this->sendResponse($taxBill->toArray(), "TaxBill updated successfully");
	}

	/**
	 * Remove the specified TaxBill from storage.
	 * DELETE /taxBills/{id}
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		$this->taxBillRepository->apiDeleteOrFail($id);

		return $this->sendResponse($id, "TaxBill deleted successfully");
	}
}
