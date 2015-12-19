<?php namespace App\Http\Controllers\API;

use App\Http\Requests;
use App\Libraries\Repositories\KardexRepository;
use App\Models\Kardex;
use Illuminate\Http\Request;
use Mitul\Controller\AppBaseController as AppBaseController;
use Response;

class KardexAPIController extends AppBaseController
{
	/** @var  KardexRepository */
	private $kardexRepository;

	function __construct(KardexRepository $kardexRepo)
	{
		$this->kardexRepository = $kardexRepo;
	}

	/**
	 * Display a listing of the Kardex.
	 * GET|HEAD /kardexes
	 *
	 * @return Response
	 */
	public function index()
	{
		$kardexes = $this->kardexRepository->all();

		return $this->sendResponse($kardexes->toArray(), "Kardexes retrieved successfully");
	}

	/**
	 * Show the form for creating a new Kardex.
	 * GET|HEAD /kardexes/create
	 *
	 * @return Response
	 */
	public function create()
	{
	}

	/**
	 * Store a newly created Kardex in storage.
	 * POST /kardexes
	 *
	 * @param Request $request
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		if(sizeof(Kardex::$rules) > 0)
			$this->validateRequestOrFail($request, Kardex::$rules);

		$input = $request->all();

		$kardexes = $this->kardexRepository->create($input);

		return $this->sendResponse($kardexes->toArray(), "Kardex saved successfully");
	}

	/**
	 * Display the specified Kardex.
	 * GET|HEAD /kardexes/{id}
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$kardex = $this->kardexRepository->apiFindOrFail($id);

		return $this->sendResponse($kardex->toArray(), "Kardex retrieved successfully");
	}

	/**
	 * Show the form for editing the specified Kardex.
	 * GET|HEAD /kardexes/{id}/edit
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
	 * Update the specified Kardex in storage.
	 * PUT/PATCH /kardexes/{id}
	 *
	 * @param  int              $id
	 * @param Request $request
	 *
	 * @return Response
	 */
	public function update($id, Request $request)
	{
		$input = $request->all();

		/** @var Kardex $kardex */
		$kardex = $this->kardexRepository->apiFindOrFail($id);

		$result = $this->kardexRepository->updateRich($input, $id);

		$kardex = $kardex->fresh();

		return $this->sendResponse($kardex->toArray(), "Kardex updated successfully");
	}

	/**
	 * Remove the specified Kardex from storage.
	 * DELETE /kardexes/{id}
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		$this->kardexRepository->apiDeleteOrFail($id);

		return $this->sendResponse($id, "Kardex deleted successfully");
	}
}
