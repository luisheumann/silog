<?php namespace App\Http\Controllers\API;

use App\Http\Requests;
use App\Libraries\Repositories\StateBillRepository;
use App\Models\StateBill;
use Illuminate\Http\Request;
use Mitul\Controller\AppBaseController as AppBaseController;
use Response;

class StateBillAPIController extends AppBaseController
{
	/** @var  StateBillRepository */
	private $stateBillRepository;

	function __construct(StateBillRepository $stateBillRepo)
	{
		$this->stateBillRepository = $stateBillRepo;
	}

	/**
	 * Display a listing of the StateBill.
	 * GET|HEAD /stateBills
	 *
	 * @return Response
	 */
	public function index()
	{
		$stateBills = $this->stateBillRepository->all();

		return $this->sendResponse($stateBills->toArray(), "StateBills retrieved successfully");
	}

	/**
	 * Show the form for creating a new StateBill.
	 * GET|HEAD /stateBills/create
	 *
	 * @return Response
	 */
	public function create()
	{
	}

	/**
	 * Store a newly created StateBill in storage.
	 * POST /stateBills
	 *
	 * @param Request $request
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		if(sizeof(StateBill::$rules) > 0)
			$this->validateRequestOrFail($request, StateBill::$rules);

		$input = $request->all();

		$stateBills = $this->stateBillRepository->create($input);

		return $this->sendResponse($stateBills->toArray(), "StateBill saved successfully");
	}

	/**
	 * Display the specified StateBill.
	 * GET|HEAD /stateBills/{id}
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$stateBill = $this->stateBillRepository->apiFindOrFail($id);

		return $this->sendResponse($stateBill->toArray(), "StateBill retrieved successfully");
	}

	/**
	 * Show the form for editing the specified StateBill.
	 * GET|HEAD /stateBills/{id}/edit
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
	 * Update the specified StateBill in storage.
	 * PUT/PATCH /stateBills/{id}
	 *
	 * @param  int              $id
	 * @param Request $request
	 *
	 * @return Response
	 */
	public function update($id, Request $request)
	{
		$input = $request->all();

		/** @var StateBill $stateBill */
		$stateBill = $this->stateBillRepository->apiFindOrFail($id);

		$result = $this->stateBillRepository->updateRich($input, $id);

		$stateBill = $stateBill->fresh();

		return $this->sendResponse($stateBill->toArray(), "StateBill updated successfully");
	}

	/**
	 * Remove the specified StateBill from storage.
	 * DELETE /stateBills/{id}
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		$this->stateBillRepository->apiDeleteOrFail($id);

		return $this->sendResponse($id, "StateBill deleted successfully");
	}
}
