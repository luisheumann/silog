<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateUnitRequest;
use App\Http\Requests\UpdateUnitRequest;
use App\Libraries\Repositories\UnitRepository;
use Flash;
use Mitul\Controller\AppBaseController as AppBaseController;
use Response;

class UnitController extends AppBaseController
{

	/** @var  UnitRepository */
	private $unitRepository;

	function __construct(UnitRepository $unitRepo)
	{
		$this->unitRepository = $unitRepo;
	}

	/**
	 * Display a listing of the Unit.
	 *
	 * @return Response
	 */
	public function index()
	{
		$units = $this->unitRepository->paginate(10);

		return view('units.index')
			->with('units', $units);
	}

	/**
	 * Show the form for creating a new Unit.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('units.create');
	}

	/**
	 * Store a newly created Unit in storage.
	 *
	 * @param CreateUnitRequest $request
	 *
	 * @return Response
	 */
	public function store(CreateUnitRequest $request)
	{
		$input = $request->all();

		$unit = $this->unitRepository->create($input);

		Flash::success('Unit saved successfully.');

		return redirect(route('units.index'));
	}

	/**
	 * Display the specified Unit.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$unit = $this->unitRepository->find($id);

		if(empty($unit))
		{
			Flash::error('Unit not found');

			return redirect(route('units.index'));
		}

		return view('units.show')->with('unit', $unit);
	}

	/**
	 * Show the form for editing the specified Unit.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function edit($id)
	{
		$unit = $this->unitRepository->find($id);

		if(empty($unit))
		{
			Flash::error('Unit not found');

			return redirect(route('units.index'));
		}

		return view('units.edit')->with('unit', $unit);
	}

	/**
	 * Update the specified Unit in storage.
	 *
	 * @param  int              $id
	 * @param UpdateUnitRequest $request
	 *
	 * @return Response
	 */
	public function update($id, UpdateUnitRequest $request)
	{
		$unit = $this->unitRepository->find($id);

		if(empty($unit))
		{
			Flash::error('Unit not found');

			return redirect(route('units.index'));
		}

		$this->unitRepository->updateRich($request->all(), $id);

		Flash::success('Unit updated successfully.');

		return redirect(route('units.index'));
	}

	/**
	 * Remove the specified Unit from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		$unit = $this->unitRepository->find($id);

		if(empty($unit))
		{
			Flash::error('Unit not found');

			return redirect(route('units.index'));
		}

		$this->unitRepository->delete($id);

		Flash::success('Unit deleted successfully.');

		return redirect(route('units.index'));
	}
}
