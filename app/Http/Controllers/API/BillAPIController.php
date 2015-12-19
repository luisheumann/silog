<?php namespace App\Http\Controllers\API;

use App\Http\Requests;
use App\Libraries\Repositories\BillRepository;
use App\Models\Bill;
use Illuminate\Http\Request;
use Mitul\Controller\AppBaseController as AppBaseController;
use Response;

class BillAPIController extends AppBaseController
{
	/** @var  BillRepository */
	private $billRepository;

	function __construct(BillRepository $billRepo)
	{
		$this->billRepository = $billRepo;
	}

	/**
	 * Display a listing of the Bill.
	 * GET|HEAD /bills
	 *
	 * @return Response
	 */
	public function index()
	{
		$bills = $this->billRepository->all();

		return $this->sendResponse($bills->toArray(), "Bills retrieved successfully");
	}

	/**
	 * Show the form for creating a new Bill.
	 * GET|HEAD /bills/create
	 *
	 * @return Response
	 */
	public function create()
	{
	}

	/**
	 * Store a newly created Bill in storage.
	 * POST /bills
	 *
	 * @param Request $request
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		if(sizeof(Bill::$rules) > 0)
			$this->validateRequestOrFail($request, Bill::$rules);

		$input = $request->all();

		$bills = $this->billRepository->create($input);

		return $this->sendResponse($bills->toArray(), "Bill saved successfully");
	}

	/**
	 * Display the specified Bill.
	 * GET|HEAD /bills/{id}
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$bill = $this->billRepository->apiFindOrFail($id);

		return $this->sendResponse($bill->toArray(), "Bill retrieved successfully");
	}

	/**
	 * Show the form for editing the specified Bill.
	 * GET|HEAD /bills/{id}/edit
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
	 * Update the specified Bill in storage.
	 * PUT/PATCH /bills/{id}
	 *
	 * @param  int              $id
	 * @param Request $request
	 *
	 * @return Response
	 */
	public function update($id, Request $request)
	{
		$input = $request->all();

		/** @var Bill $bill */
		$bill = $this->billRepository->apiFindOrFail($id);

		$result = $this->billRepository->updateRich($input, $id);

		$bill = $bill->fresh();

		return $this->sendResponse($bill->toArray(), "Bill updated successfully");
	}

	/**
	 * Remove the specified Bill from storage.
	 * DELETE /bills/{id}
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		$this->billRepository->apiDeleteOrFail($id);

		return $this->sendResponse($id, "Bill deleted successfully");
	}
}
