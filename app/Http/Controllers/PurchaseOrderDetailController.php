<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreatePurchaseOrderDetailRequest;
use App\Http\Requests\UpdatePurchaseOrderDetailRequest;
use App\Libraries\Repositories\PurchaseOrderDetailRepository;
use Flash;
use Mitul\Controller\AppBaseController as AppBaseController;
use Response;

class PurchaseOrderDetailController extends AppBaseController
{

	/** @var  PurchaseOrderDetailRepository */
	private $purchaseOrderDetailRepository;

	function __construct(PurchaseOrderDetailRepository $purchaseOrderDetailRepo)
	{
		$this->purchaseOrderDetailRepository = $purchaseOrderDetailRepo;
	}

	/**
	 * Display a listing of the PurchaseOrderDetail.
	 *
	 * @return Response
	 */
	public function index()
	{
		$purchaseOrderDetails = $this->purchaseOrderDetailRepository->paginate(10);

		return view('purchaseOrderDetails.index')
			->with('purchaseOrderDetails', $purchaseOrderDetails);
	}

	/**
	 * Show the form for creating a new PurchaseOrderDetail.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('purchaseOrderDetails.create');
	}

	/**
	 * Store a newly created PurchaseOrderDetail in storage.
	 *
	 * @param CreatePurchaseOrderDetailRequest $request
	 *
	 * @return Response
	 */
	public function store(CreatePurchaseOrderDetailRequest $request)
	{
		$input = $request->all();

		$purchaseOrderDetail = $this->purchaseOrderDetailRepository->create($input);

		Flash::success('PurchaseOrderDetail saved successfully.');

		return redirect(route('purchaseOrderDetails.index'));
	}

	/**
	 * Display the specified PurchaseOrderDetail.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$purchaseOrderDetail = $this->purchaseOrderDetailRepository->find($id);

		if(empty($purchaseOrderDetail))
		{
			Flash::error('PurchaseOrderDetail not found');

			return redirect(route('purchaseOrderDetails.index'));
		}

		return view('purchaseOrderDetails.show')->with('purchaseOrderDetail', $purchaseOrderDetail);
	}

	/**
	 * Show the form for editing the specified PurchaseOrderDetail.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function edit($id)
	{
		$purchaseOrderDetail = $this->purchaseOrderDetailRepository->find($id);

		if(empty($purchaseOrderDetail))
		{
			Flash::error('PurchaseOrderDetail not found');

			return redirect(route('purchaseOrderDetails.index'));
		}

		return view('purchaseOrderDetails.edit')->with('purchaseOrderDetail', $purchaseOrderDetail);
	}

	/**
	 * Update the specified PurchaseOrderDetail in storage.
	 *
	 * @param  int              $id
	 * @param UpdatePurchaseOrderDetailRequest $request
	 *
	 * @return Response
	 */
	public function update($id, UpdatePurchaseOrderDetailRequest $request)
	{
		$purchaseOrderDetail = $this->purchaseOrderDetailRepository->find($id);

		if(empty($purchaseOrderDetail))
		{
			Flash::error('PurchaseOrderDetail not found');

			return redirect(route('purchaseOrderDetails.index'));
		}

		$this->purchaseOrderDetailRepository->updateRich($request->all(), $id);

		Flash::success('PurchaseOrderDetail updated successfully.');

		return redirect(route('purchaseOrderDetails.index'));
	}

	/**
	 * Remove the specified PurchaseOrderDetail from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		$purchaseOrderDetail = $this->purchaseOrderDetailRepository->find($id);

		if(empty($purchaseOrderDetail))
		{
			Flash::error('PurchaseOrderDetail not found');

			return redirect(route('purchaseOrderDetails.index'));
		}

		$this->purchaseOrderDetailRepository->delete($id);

		Flash::success('PurchaseOrderDetail deleted successfully.');

		return redirect(route('purchaseOrderDetails.index'));
	}
}
