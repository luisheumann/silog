<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateTaxBillRequest;
use App\Http\Requests\UpdateTaxBillRequest;
use App\Libraries\Repositories\TaxBillRepository;
use Flash;
use Mitul\Controller\AppBaseController as AppBaseController;
use Response;

class TaxBillController extends AppBaseController
{

	/** @var  TaxBillRepository */
	private $taxBillRepository;

	function __construct(TaxBillRepository $taxBillRepo)
	{
		$this->taxBillRepository = $taxBillRepo;
	}

	/**
	 * Display a listing of the TaxBill.
	 *
	 * @return Response
	 */
	public function index()
	{
		$taxBills = $this->taxBillRepository->paginate(10);

		return view('taxBills.index')
			->with('taxBills', $taxBills);
	}

	/**
	 * Show the form for creating a new TaxBill.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('taxBills.create');
	}

	/**
	 * Store a newly created TaxBill in storage.
	 *
	 * @param CreateTaxBillRequest $request
	 *
	 * @return Response
	 */
	public function store(CreateTaxBillRequest $request)
	{
		$input = $request->all();

		$taxBill = $this->taxBillRepository->create($input);

		Flash::success('TaxBill saved successfully.');

		return redirect(route('taxBills.index'));
	}

	/**
	 * Display the specified TaxBill.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$taxBill = $this->taxBillRepository->find($id);

		if(empty($taxBill))
		{
			Flash::error('TaxBill not found');

			return redirect(route('taxBills.index'));
		}

		return view('taxBills.show')->with('taxBill', $taxBill);
	}

	/**
	 * Show the form for editing the specified TaxBill.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function edit($id)
	{
		$taxBill = $this->taxBillRepository->find($id);

		if(empty($taxBill))
		{
			Flash::error('TaxBill not found');

			return redirect(route('taxBills.index'));
		}

		return view('taxBills.edit')->with('taxBill', $taxBill);
	}

	/**
	 * Update the specified TaxBill in storage.
	 *
	 * @param  int              $id
	 * @param UpdateTaxBillRequest $request
	 *
	 * @return Response
	 */
	public function update($id, UpdateTaxBillRequest $request)
	{
		$taxBill = $this->taxBillRepository->find($id);

		if(empty($taxBill))
		{
			Flash::error('TaxBill not found');

			return redirect(route('taxBills.index'));
		}

		$this->taxBillRepository->updateRich($request->all(), $id);

		Flash::success('TaxBill updated successfully.');

		return redirect(route('taxBills.index'));
	}

	/**
	 * Remove the specified TaxBill from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		$taxBill = $this->taxBillRepository->find($id);

		if(empty($taxBill))
		{
			Flash::error('TaxBill not found');

			return redirect(route('taxBills.index'));
		}

		$this->taxBillRepository->delete($id);

		Flash::success('TaxBill deleted successfully.');

		return redirect(route('taxBills.index'));
	}
}
