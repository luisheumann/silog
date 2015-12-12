<?php namespace App\Http\Controllers\API;

use App\Http\Requests;
use App\Libraries\Repositories\BillDetailRepository;
use App\Models\BillDetail;
use Illuminate\Http\Request;
use Mitul\Controller\AppBaseController as AppBaseController;
use Response;

class BillDetailAPIController extends AppBaseController
{
	/** @var  BillDetailRepository */
	private $billDetailRepository;

	function __construct(BillDetailRepository $billDetailRepo)
	{
		$this->billDetailRepository = $billDetailRepo;
	}

	/**
	 * Display a listing of the BillDetail.
	 * GET|HEAD /billDetails
	 *
	 * @return Response
	 */
	public function index()
	{
		$billDetails = $this->billDetailRepository->all();

		return $this->sendResponse($billDetails->toArray(), "BillDetails retrieved successfully");
	}

	/**
	 * Show the form for creating a new BillDetail.
	 * GET|HEAD /billDetails/create
	 *
	 * @return Response
	 */
	public function create()
	{
	}

	/**
	 * Store a newly created BillDetail in storage.
	 * POST /billDetails
	 *
	 * @param Request $request
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		if(sizeof(BillDetail::$rules) > 0)
			$this->validateRequestOrFail($request, BillDetail::$rules);

		$input = $request->all();

		$billDetails = $this->billDetailRepository->create($input);

		return $this->sendResponse($billDetails->toArray(), "BillDetail saved successfully");
	}

	/**
	 * Display the specified BillDetail.
	 * GET|HEAD /billDetails/{id}
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$billDetail = $this->billDetailRepository->apiFindOrFail($id);

		return $this->sendResponse($billDetail->toArray(), "BillDetail retrieved successfully");
	}

	/**
	 * Show the form for editing the specified BillDetail.
	 * GET|HEAD /billDetails/{id}/edit
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
	 * Update the specified BillDetail in storage.
	 * PUT/PATCH /billDetails/{id}
	 *
	 * @param  int              $id
	 * @param Request $request
	 *
	 * @return Response
	 */
	public function update($id, Request $request)
	{
		$input = $request->all();

		/** @var BillDetail $billDetail */
		$billDetail = $this->billDetailRepository->apiFindOrFail($id);

		$result = $this->billDetailRepository->updateRich($input, $id);

		$billDetail = $billDetail->fresh();

		return $this->sendResponse($billDetail->toArray(), "BillDetail updated successfully");
	}

	/**
	 * Remove the specified BillDetail from storage.
	 * DELETE /billDetails/{id}
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		$this->billDetailRepository->apiDeleteOrFail($id);

		return $this->sendResponse($id, "BillDetail deleted successfully");
	}
}
