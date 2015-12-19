<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateKardexRequest;
use App\Http\Requests\UpdateKardexRequest;
use App\Libraries\Repositories\KardexRepository;
use Flash;
use Mitul\Controller\AppBaseController as AppBaseController;
use Response;

class KardexController extends AppBaseController
{

	/** @var  KardexRepository */
	private $kardexRepository;

	function __construct(KardexRepository $kardexRepo)
	{
		$this->kardexRepository = $kardexRepo;
	}

	/**
	 * Display a listing of the Kardex.
	 *
	 * @return Response
	 */
	public function index()
	{
		$kardexes = $this->kardexRepository->paginate(10);

		return view('kardexes.index')
			->with('kardexes', $kardexes);
	}

	/**
	 * Show the form for creating a new Kardex.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('kardexes.create');
	}

	/**
	 * Store a newly created Kardex in storage.
	 *
	 * @param CreateKardexRequest $request
	 *
	 * @return Response
	 */
	public function store(CreateKardexRequest $request)
	{
		$input = $request->all();

		$kardex = $this->kardexRepository->create($input);

		Flash::success('Kardex saved successfully.');

		return redirect(route('kardexes.index'));
	}

	/**
	 * Display the specified Kardex.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$kardex = $this->kardexRepository->find($id);

		if(empty($kardex))
		{
			Flash::error('Kardex not found');

			return redirect(route('kardexes.index'));
		}

		return view('kardexes.show')->with('kardex', $kardex);
	}

	/**
	 * Show the form for editing the specified Kardex.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function edit($id)
	{
		$kardex = $this->kardexRepository->find($id);

		if(empty($kardex))
		{
			Flash::error('Kardex not found');

			return redirect(route('kardexes.index'));
		}

		return view('kardexes.edit')->with('kardex', $kardex);
	}

	/**
	 * Update the specified Kardex in storage.
	 *
	 * @param  int              $id
	 * @param UpdateKardexRequest $request
	 *
	 * @return Response
	 */
	public function update($id, UpdateKardexRequest $request)
	{
		$kardex = $this->kardexRepository->find($id);

		if(empty($kardex))
		{
			Flash::error('Kardex not found');

			return redirect(route('kardexes.index'));
		}

		$this->kardexRepository->updateRich($request->all(), $id);

		Flash::success('Kardex updated successfully.');

		return redirect(route('kardexes.index'));
	}

	/**
	 * Remove the specified Kardex from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		$kardex = $this->kardexRepository->find($id);

		if(empty($kardex))
		{
			Flash::error('Kardex not found');

			return redirect(route('kardexes.index'));
		}

		$this->kardexRepository->delete($id);

		Flash::success('Kardex deleted successfully.');

		return redirect(route('kardexes.index'));
	}
}
