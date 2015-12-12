<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateBillDetailRequest;
use App\Http\Requests\UpdateBillDetailRequest;
use App\Libraries\Repositories\BillDetailRepository;
use Flash;
use Mitul\Controller\AppBaseController as AppBaseController;
use Response;

class BillDetailController extends AppBaseController
{

	/** @var  BillDetailRepository */
	private $billDetailRepository;

	function __construct(BillDetailRepository $billDetailRepo)
	{
		$this->billDetailRepository = $billDetailRepo;
	}

	/**
	 * Display a listing of the BillDetail.
	 *
	 * @return Response
	 */
	public function index()
	{
		$billDetails = $this->billDetailRepository->paginate(10);

		return view('billDetails.index')
			->with('billDetails', $billDetails);
	}

	/**
	 * Show the form for creating a new BillDetail.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('billDetails.create');
	}

	/**
	 * Store a newly created BillDetail in storage.
	 *
	 * @param CreateBillDetailRequest $request
	 *
	 * @return Response
	 */
	public function store(CreateBillDetailRequest $request)
	{
		$input = $request->all();

		$billDetail = $this->billDetailRepository->create($input);

		Flash::success('BillDetail saved successfully.');

		return redirect(route('billDetails.index'));
	}

	/**
	 * Display the specified BillDetail.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$billDetail = $this->billDetailRepository->find($id);

		if(empty($billDetail))
		{
			Flash::error('BillDetail not found');

			return redirect(route('billDetails.index'));
		}

		return view('billDetails.show')->with('billDetail', $billDetail);
	}

	/**
	 * Show the form for editing the specified BillDetail.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function edit($id)
	{
		$billDetail = $this->billDetailRepository->find($id);

		if(empty($billDetail))
		{
			Flash::error('BillDetail not found');

			return redirect(route('billDetails.index'));
		}

		return view('billDetails.edit')->with('billDetail', $billDetail);
	}

	/**
	 * Update the specified BillDetail in storage.
	 *
	 * @param  int              $id
	 * @param UpdateBillDetailRequest $request
	 *
	 * @return Response
	 */
	public function update($id, UpdateBillDetailRequest $request)
	{
		$billDetail = $this->billDetailRepository->find($id);

		if(empty($billDetail))
		{
			Flash::error('BillDetail not found');

			return redirect(route('billDetails.index'));
		}

		$this->billDetailRepository->updateRich($request->all(), $id);

		Flash::success('BillDetail updated successfully.');

		return redirect(route('billDetails.index'));
	}

	/**
	 * Remove the specified BillDetail from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		$billDetail = $this->billDetailRepository->find($id);

		if(empty($billDetail))
		{
			Flash::error('BillDetail not found');

			return redirect(route('billDetails.index'));
		}

		$this->billDetailRepository->delete($id);

		Flash::success('BillDetail deleted successfully.');

		return redirect(route('billDetails.index'));
	}
}
