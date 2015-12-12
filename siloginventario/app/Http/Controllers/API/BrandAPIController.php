<?php namespace App\Http\Controllers\API;

use App\Http\Requests;
use App\Libraries\Repositories\BrandRepository;
use App\Models\Brand;
use Illuminate\Http\Request;
use Mitul\Controller\AppBaseController as AppBaseController;
use Response;

class BrandAPIController extends AppBaseController
{
	/** @var  BrandRepository */
	private $brandRepository;

	function __construct(BrandRepository $brandRepo)
	{
		$this->brandRepository = $brandRepo;
	}

	/**
	 * Display a listing of the Brand.
	 * GET|HEAD /brands
	 *
	 * @return Response
	 */
	public function index()
	{
		$brands = $this->brandRepository->all();

		return $this->sendResponse($brands->toArray(), "Brands retrieved successfully");
	}

	/**
	 * Show the form for creating a new Brand.
	 * GET|HEAD /brands/create
	 *
	 * @return Response
	 */
	public function create()
	{
	}

	/**
	 * Store a newly created Brand in storage.
	 * POST /brands
	 *
	 * @param Request $request
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		if(sizeof(Brand::$rules) > 0)
			$this->validateRequestOrFail($request, Brand::$rules);

		$input = $request->all();

		$brands = $this->brandRepository->create($input);

		return $this->sendResponse($brands->toArray(), "Brand saved successfully");
	}

	/**
	 * Display the specified Brand.
	 * GET|HEAD /brands/{id}
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$brand = $this->brandRepository->apiFindOrFail($id);

		return $this->sendResponse($brand->toArray(), "Brand retrieved successfully");
	}

	/**
	 * Show the form for editing the specified Brand.
	 * GET|HEAD /brands/{id}/edit
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
	 * Update the specified Brand in storage.
	 * PUT/PATCH /brands/{id}
	 *
	 * @param  int              $id
	 * @param Request $request
	 *
	 * @return Response
	 */
	public function update($id, Request $request)
	{
		$input = $request->all();

		/** @var Brand $brand */
		$brand = $this->brandRepository->apiFindOrFail($id);

		$result = $this->brandRepository->updateRich($input, $id);

		$brand = $brand->fresh();

		return $this->sendResponse($brand->toArray(), "Brand updated successfully");
	}

	/**
	 * Remove the specified Brand from storage.
	 * DELETE /brands/{id}
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		$this->brandRepository->apiDeleteOrFail($id);

		return $this->sendResponse($id, "Brand deleted successfully");
	}
}
