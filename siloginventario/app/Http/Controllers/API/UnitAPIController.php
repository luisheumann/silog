<?php namespace App\Http\Controllers\API;

use App\Http\Requests;
use App\Libraries\Repositories\UnitRepository;
use App\Models\Unit;
use Illuminate\Http\Request;
use Mitul\Controller\AppBaseController as AppBaseController;
use Response;

class UnitAPIController extends AppBaseController
{
	/** @var  UnitRepository */
	private $unitRepository;

	function __construct(UnitRepository $unitRepo)
	{
		$this->unitRepository = $unitRepo;
	}

	/**
	 * Display a listing of the Unit.
	 * GET|HEAD /units
	 *
	 * @return Response
	 */
	public function index()
	{
		$units = $this->unitRepository->all();

		return $this->sendResponse($units->toArray(), "Units retrieved successfully");
	}

	/**
	 * Show the form for creating a new Unit.
	 * GET|HEAD /units/create
	 *
	 * @return Response
	 */
	public function create()
	{
	}

	/**
	 * Store a newly created Unit in storage.
	 * POST /units
	 *
	 * @param Request $request
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		if(sizeof(Unit::$rules) > 0)
			$this->validateRequestOrFail($request, Unit::$rules);

		$input = $request->all();

		$units = $this->unitRepository->create($input);

		return $this->sendResponse($units->toArray(), "Unit saved successfully");
	}

	/**
	 * Display the specified Unit.
	 * GET|HEAD /units/{id}
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$unit = $this->unitRepository->apiFindOrFail($id);

		return $this->sendResponse($unit->toArray(), "Unit retrieved successfully");
	}

	/**
	 * Show the form for editing the specified Unit.
	 * GET|HEAD /units/{id}/edit
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
	 * Update the specified Unit in storage.
	 * PUT/PATCH /units/{id}
	 *
	 * @param  int              $id
	 * @param Request $request
	 *
	 * @return Response
	 */
	public function update($id, Request $request)
	{
		$input = $request->all();

		/** @var Unit $unit */
		$unit = $this->unitRepository->apiFindOrFail($id);

		$result = $this->unitRepository->updateRich($input, $id);

		$unit = $unit->fresh();

		return $this->sendResponse($unit->toArray(), "Unit updated successfully");
	}

	/**
	 * Remove the specified Unit from storage.
	 * DELETE /units/{id}
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		$this->unitRepository->apiDeleteOrFail($id);

		return $this->sendResponse($id, "Unit deleted successfully");
	}
}
