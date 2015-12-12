<?php namespace App\Http\Controllers\API;

use App\Http\Requests;
use App\Libraries\Repositories\PurchaseOrderRepository;
use App\Models\PurchaseOrder;
use Illuminate\Http\Request;
use Mitul\Controller\AppBaseController as AppBaseController;
use Response;

class PurchaseOrderAPIController extends AppBaseController
{
	/** @var  PurchaseOrderRepository */
	private $purchaseOrderRepository;

	function __construct(PurchaseOrderRepository $purchaseOrderRepo)
	{
		$this->purchaseOrderRepository = $purchaseOrderRepo;
	}

	/**
	 * Display a listing of the PurchaseOrder.
	 * GET|HEAD /purchaseOrders
	 *
	 * @return Response
	 */
	public function index()
	{
		$purchaseOrders = $this->purchaseOrderRepository->all();

		return $this->sendResponse($purchaseOrders->toArray(), "PurchaseOrders retrieved successfully");
	}

	/**
	 * Show the form for creating a new PurchaseOrder.
	 * GET|HEAD /purchaseOrders/create
	 *
	 * @return Response
	 */
	public function create()
	{
	}

	/**
	 * Store a newly created PurchaseOrder in storage.
	 * POST /purchaseOrders
	 *
	 * @param Request $request
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		if(sizeof(PurchaseOrder::$rules) > 0)
			$this->validateRequestOrFail($request, PurchaseOrder::$rules);

		$input = $request->all();

		$purchaseOrders = $this->purchaseOrderRepository->create($input);

		return $this->sendResponse($purchaseOrders->toArray(), "PurchaseOrder saved successfully");
	}

	/**
	 * Display the specified PurchaseOrder.
	 * GET|HEAD /purchaseOrders/{id}
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$purchaseOrder = $this->purchaseOrderRepository->apiFindOrFail($id);

		return $this->sendResponse($purchaseOrder->toArray(), "PurchaseOrder retrieved successfully");
	}

	/**
	 * Show the form for editing the specified PurchaseOrder.
	 * GET|HEAD /purchaseOrders/{id}/edit
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
	 * Update the specified PurchaseOrder in storage.
	 * PUT/PATCH /purchaseOrders/{id}
	 *
	 * @param  int              $id
	 * @param Request $request
	 *
	 * @return Response
	 */
	public function update($id, Request $request)
	{
		$input = $request->all();

		/** @var PurchaseOrder $purchaseOrder */
		$purchaseOrder = $this->purchaseOrderRepository->apiFindOrFail($id);

		$result = $this->purchaseOrderRepository->updateRich($input, $id);

		$purchaseOrder = $purchaseOrder->fresh();

		return $this->sendResponse($purchaseOrder->toArray(), "PurchaseOrder updated successfully");
	}

	/**
	 * Remove the specified PurchaseOrder from storage.
	 * DELETE /purchaseOrders/{id}
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		$this->purchaseOrderRepository->apiDeleteOrFail($id);

		return $this->sendResponse($id, "PurchaseOrder deleted successfully");
	}
}
