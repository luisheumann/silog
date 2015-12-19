<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreatePurchaseOrderRequest;
use App\Http\Requests\UpdatePurchaseOrderRequest;
use App\Libraries\Repositories\PurchaseOrderRepository;
use Flash;
use Mitul\Controller\AppBaseController as AppBaseController;
use Response;

class PurchaseOrderController extends AppBaseController
{

	/** @var  PurchaseOrderRepository */
	private $purchaseOrderRepository;

	function __construct(PurchaseOrderRepository $purchaseOrderRepo)
	{
		$this->purchaseOrderRepository = $purchaseOrderRepo;
	}

	/**
	 * Display a listing of the PurchaseOrder.
	 *
	 * @return Response
	 */
	public function index()
	{
		$purchaseOrders = $this->purchaseOrderRepository->paginate(10);

		return view('purchaseOrders.index')
			->with('purchaseOrders', $purchaseOrders);
	}

	/**
	 * Show the form for creating a new PurchaseOrder.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('purchaseOrders.create');
	}

	/**
	 * Store a newly created PurchaseOrder in storage.
	 *
	 * @param CreatePurchaseOrderRequest $request
	 *
	 * @return Response
	 */
	public function store(CreatePurchaseOrderRequest $request)
	{
		$input = $request->all();

		$purchaseOrder = $this->purchaseOrderRepository->create($input);

		Flash::success('PurchaseOrder saved successfully.');

		return redirect(route('purchaseOrders.index'));
	}

	/**
	 * Display the specified PurchaseOrder.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$purchaseOrder = $this->purchaseOrderRepository->find($id);

		if(empty($purchaseOrder))
		{
			Flash::error('PurchaseOrder not found');

			return redirect(route('purchaseOrders.index'));
		}

		return view('purchaseOrders.show')->with('purchaseOrder', $purchaseOrder);
	}

	/**
	 * Show the form for editing the specified PurchaseOrder.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function edit($id)
	{
		$purchaseOrder = $this->purchaseOrderRepository->find($id);

		if(empty($purchaseOrder))
		{
			Flash::error('PurchaseOrder not found');

			return redirect(route('purchaseOrders.index'));
		}

		return view('purchaseOrders.edit')->with('purchaseOrder', $purchaseOrder);
	}

	/**
	 * Update the specified PurchaseOrder in storage.
	 *
	 * @param  int              $id
	 * @param UpdatePurchaseOrderRequest $request
	 *
	 * @return Response
	 */
	public function update($id, UpdatePurchaseOrderRequest $request)
	{
		$purchaseOrder = $this->purchaseOrderRepository->find($id);

		if(empty($purchaseOrder))
		{
			Flash::error('PurchaseOrder not found');

			return redirect(route('purchaseOrders.index'));
		}

		$this->purchaseOrderRepository->updateRich($request->all(), $id);

		Flash::success('PurchaseOrder updated successfully.');

		return redirect(route('purchaseOrders.index'));
	}

	/**
	 * Remove the specified PurchaseOrder from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		$purchaseOrder = $this->purchaseOrderRepository->find($id);

		if(empty($purchaseOrder))
		{
			Flash::error('PurchaseOrder not found');

			return redirect(route('purchaseOrders.index'));
		}

		$this->purchaseOrderRepository->delete($id);

		Flash::success('PurchaseOrder deleted successfully.');

		return redirect(route('purchaseOrders.index'));
	}
}
