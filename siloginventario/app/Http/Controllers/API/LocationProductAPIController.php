<?php namespace App\Http\Controllers\API;

use App\Http\Requests;
use App\Libraries\Repositories\LocationProductRepository;
use App\Models\LocationProduct;
use Illuminate\Http\Request;
use Mitul\Controller\AppBaseController as AppBaseController;
use Response;

class LocationProductAPIController extends AppBaseController
{
	/** @var  LocationProductRepository */
	private $locationProductRepository;

	function __construct(LocationProductRepository $locationProductRepo)
	{
		$this->locationProductRepository = $locationProductRepo;
	}

	/**
	 * Display a listing of the LocationProduct.
	 * GET|HEAD /locationProducts
	 *
	 * @return Response
	 */
	public function index()
	{
		$locationProducts = $this->locationProductRepository->all();

		return $this->sendResponse($locationProducts->toArray(), "LocationProducts retrieved successfully");
	}

	/**
	 * Show the form for creating a new LocationProduct.
	 * GET|HEAD /locationProducts/create
	 *
	 * @return Response
	 */
	public function create()
	{
	}

	/**
	 * Store a newly created LocationProduct in storage.
	 * POST /locationProducts
	 *
	 * @param Request $request
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		if(sizeof(LocationProduct::$rules) > 0)
			$this->validateRequestOrFail($request, LocationProduct::$rules);

		$input = $request->all();

		$locationProducts = $this->locationProductRepository->create($input);

		return $this->sendResponse($locationProducts->toArray(), "LocationProduct saved successfully");
	}

	/**
	 * Display the specified LocationProduct.
	 * GET|HEAD /locationProducts/{id}
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$locationProduct = $this->locationProductRepository->apiFindOrFail($id);

		return $this->sendResponse($locationProduct->toArray(), "LocationProduct retrieved successfully");
	}

	/**
	 * Show the form for editing the specified LocationProduct.
	 * GET|HEAD /locationProducts/{id}/edit
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
	 * Update the specified LocationProduct in storage.
	 * PUT/PATCH /locationProducts/{id}
	 *
	 * @param  int              $id
	 * @param Request $request
	 *
	 * @return Response
	 */
	public function update($id, Request $request)
	{
		$input = $request->all();

		/** @var LocationProduct $locationProduct */
		$locationProduct = $this->locationProductRepository->apiFindOrFail($id);

		$result = $this->locationProductRepository->updateRich($input, $id);

		$locationProduct = $locationProduct->fresh();

		return $this->sendResponse($locationProduct->toArray(), "LocationProduct updated successfully");
	}

	/**
	 * Remove the specified LocationProduct from storage.
	 * DELETE /locationProducts/{id}
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		$this->locationProductRepository->apiDeleteOrFail($id);

		return $this->sendResponse($id, "LocationProduct deleted successfully");
	}
}
