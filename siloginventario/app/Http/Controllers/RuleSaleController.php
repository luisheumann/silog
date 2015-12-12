<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateRuleSaleRequest;
use App\Http\Requests\UpdateRuleSaleRequest;
use App\Libraries\Repositories\RuleSaleRepository;
use Flash;
use Mitul\Controller\AppBaseController as AppBaseController;
use Response;

class RuleSaleController extends AppBaseController
{

	/** @var  RuleSaleRepository */
	private $ruleSaleRepository;

	function __construct(RuleSaleRepository $ruleSaleRepo)
	{
		$this->ruleSaleRepository = $ruleSaleRepo;
	}

	/**
	 * Display a listing of the RuleSale.
	 *
	 * @return Response
	 */
	public function index()
	{
		$ruleSales = $this->ruleSaleRepository->paginate(10);

		return view('ruleSales.index')
			->with('ruleSales', $ruleSales);
	}

	/**
	 * Show the form for creating a new RuleSale.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('ruleSales.create');
	}

	/**
	 * Store a newly created RuleSale in storage.
	 *
	 * @param CreateRuleSaleRequest $request
	 *
	 * @return Response
	 */
	public function store(CreateRuleSaleRequest $request)
	{
		$input = $request->all();

		$ruleSale = $this->ruleSaleRepository->create($input);

		Flash::success('RuleSale saved successfully.');

		return redirect(route('ruleSales.index'));
	}

	/**
	 * Display the specified RuleSale.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$ruleSale = $this->ruleSaleRepository->find($id);

		if(empty($ruleSale))
		{
			Flash::error('RuleSale not found');

			return redirect(route('ruleSales.index'));
		}

		return view('ruleSales.show')->with('ruleSale', $ruleSale);
	}

	/**
	 * Show the form for editing the specified RuleSale.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function edit($id)
	{
		$ruleSale = $this->ruleSaleRepository->find($id);

		if(empty($ruleSale))
		{
			Flash::error('RuleSale not found');

			return redirect(route('ruleSales.index'));
		}

		return view('ruleSales.edit')->with('ruleSale', $ruleSale);
	}

	/**
	 * Update the specified RuleSale in storage.
	 *
	 * @param  int              $id
	 * @param UpdateRuleSaleRequest $request
	 *
	 * @return Response
	 */
	public function update($id, UpdateRuleSaleRequest $request)
	{
		$ruleSale = $this->ruleSaleRepository->find($id);

		if(empty($ruleSale))
		{
			Flash::error('RuleSale not found');

			return redirect(route('ruleSales.index'));
		}

		$this->ruleSaleRepository->updateRich($request->all(), $id);

		Flash::success('RuleSale updated successfully.');

		return redirect(route('ruleSales.index'));
	}

	/**
	 * Remove the specified RuleSale from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		$ruleSale = $this->ruleSaleRepository->find($id);

		if(empty($ruleSale))
		{
			Flash::error('RuleSale not found');

			return redirect(route('ruleSales.index'));
		}

		$this->ruleSaleRepository->delete($id);

		Flash::success('RuleSale deleted successfully.');

		return redirect(route('ruleSales.index'));
	}
}
