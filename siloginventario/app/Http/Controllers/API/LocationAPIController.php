<?php namespace App\Http\Controllers\API;

use App\Http\Requests;
use App\Libraries\Repositories\LocationRepository;
use App\Models\Location;
use Illuminate\Http\Request;
use Mitul\Controller\AppBaseController as AppBaseController;
use Response;

class LocationAPIController extends AppBaseController
{
	/** @var  LocationRepository */
	private $locationRepository;

	function __construct(LocationRepository $locationRepo)
	{
		$this->locationRepository = $locationRepo;
	}

	/**
	 * Display a listing of the Location.
	 * GET|HEAD /locations
	 *
	 * @return Response
	 */
	public function index()
	{
		$locations = $this->locationRepository->all();

		return $this->sendResponse($locations->toArray(), "Locations retrieved successfully");
	}

	/**
	 * Show the form for creating a new Location.
	 * GET|HEAD /locations/create
	 *
	 * @return Response
	 */
	public function create()
	{
	}

	/**
	 * Store a newly created Location in storage.
	 * POST /locations
	 *
	 * @param Request $request
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		if(sizeof(Location::$rules) > 0)
			$this->validateRequestOrFail($request, Location::$rules);

		$input = $request->all();

		$locations = $this->locationRepository->create($input);

		return $this->sendResponse($locations->toArray(), "Location saved successfully");
	}

	/**
	 * Display the specified Location.
	 * GET|HEAD /locations/{id}
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$location = $this->locationRepository->apiFindOrFail($id);

		return $this->sendResponse($location->toArray(), "Location retrieved successfully");
	}

	/**
	 * Show the form for editing the specified Location.
	 * GET|HEAD /locations/{id}/edit
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
	 * Update the specified Location in storage.
	 * PUT/PATCH /locations/{id}
	 *
	 * @param  int              $id
	 * @param Request $request
	 *
	 * @return Response
	 */
	public function update($id, Request $request)
	{
		$input = $request->all();

		/** @var Location $location */
		$location = $this->locationRepository->apiFindOrFail($id);

		$result = $this->locationRepository->updateRich($input, $id);

		$location = $location->fresh();

		return $this->sendResponse($location->toArray(), "Location updated successfully");
	}

	/**
	 * Remove the specified Location from storage.
	 * DELETE /locations/{id}
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		$this->locationRepository->apiDeleteOrFail($id);

		return $this->sendResponse($id, "Location deleted successfully");
	}
}
