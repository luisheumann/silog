<?php namespace App\Http\Controllers\API;

use App\Http\Requests;
use App\Libraries\Repositories\PurchaseOrderDetailRepository;
use App\Models\PurchaseOrderDetail;
use Illuminate\Http\Request;
use Mitul\Controller\AppBaseController as AppBaseController;
use Response;

class PurchaseOrderDetailAPIController extends AppBaseController
{
	/** @var  PurchaseOrderDetailRepository */
	private $purchaseOrderDetailRepository;

	function __construct(PurchaseOrderDetailRepository $purchaseOrderDetailRepo)
	{
		$this->purchaseOrderDetailRepository = $purchaseOrderDetailRepo;
	}

	/**
	 * Display a listing of the PurchaseOrderDetail.
	 * GET|HEAD /purchaseOrderDetails
	 *
	 * @return Response
	 */
	public function index()
	{
		$purchaseOrderDetails = $this->purchaseOrderDetailRepository->all();

		return $this->sendResponse($purchaseOrderDetails->toArray(), "PurchaseOrderDetails retrieved successfully");
	}

	/**
	 * Show the form for creating a new PurchaseOrderDetail.
	 * GET|HEAD /purchaseOrderDetails/create
	 *
	 * @return Response
	 */
	public function create()
	{
	}

	/**
	 * Store a newly created PurchaseOrderDetail in storage.
	 * POST /purchaseOrderDetails
	 *
	 * @param Request $request
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		if(sizeof(PurchaseOrderDetail::$rules) > 0)
			$this->validateRequestOrFail($request, PurchaseOrderDetail::$rules);

		$input = $request->all();

		$purchaseOrderDetails = $this->purchaseOrderDetailRepository->create($input);

		return $this->sendResponse($purchaseOrderDetails->toArray(), "PurchaseOrderDetail saved successfully");
	}

	/**
	 * Display the specified PurchaseOrderDetail.
	 * GET|HEAD /purchaseOrderDetails/{id}
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$purchaseOrderDetail = $this->purchaseOrderDetailRepository->apiFindOrFail($id);

		return $this->sendResponse($purchaseOrderDetail->toArray(), "PurchaseOrderDetail retrieved successfully");
	}

	/**
	 * Show the form for editing the specified PurchaseOrderDetail.
	 * GET|HEAD /purchaseOrderDetails/{id}/edit
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
	 * Update the specified PurchaseOrderDetail in storage.
	 * PUT/PATCH /purchaseOrderDetails/{id}
	 *
	 * @param  int              $id
	 * @param Request $request
	 *
	 * @return Response
	 */
	public function update($id, Request $request)
	{
		$input = $request->all();

		/** @var PurchaseOrderDetail $purchaseOrderDetail */
		$purchaseOrderDetail = $this->purchaseOrderDetailRepository->apiFindOrFail($id);

		$result = $this->purchaseOrderDetailRepository->updateRich($input, $id);

		$purchaseOrderDetail = $purchaseOrderDetail->fresh();

		return $this->sendResponse($purchaseOrderDetail->toArray(), "PurchaseOrderDetail updated successfully");
	}

	/**
	 * Remove the specified PurchaseOrderDetail from storage.
	 * DELETE /purchaseOrderDetails/{id}
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		$this->purchaseOrderDetailRepository->apiDeleteOrFail($id);

		return $this->sendResponse($id, "PurchaseOrderDetail deleted successfully");
	}
}
