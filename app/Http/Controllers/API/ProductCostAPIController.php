<?php namespace App\Http\Controllers\API;

use App\Http\Requests;
use App\Libraries\Repositories\ProductCostRepository;
use App\Models\ProductCost;
use Illuminate\Http\Request;
use Mitul\Controller\AppBaseController as AppBaseController;
use Response;

class ProductCostAPIController extends AppBaseController
{
	/** @var  ProductCostRepository */
	private $productCostRepository;

	function __construct(ProductCostRepository $productCostRepo)
	{
		$this->productCostRepository = $productCostRepo;
	}

	/**
	 * Display a listing of the ProductCost.
	 * GET|HEAD /productCosts
	 *
	 * @return Response
	 */
	public function index()
	{
		$productCosts = $this->productCostRepository->all();

		return $this->sendResponse($productCosts->toArray(), "ProductCosts retrieved successfully");
	}

	/**
	 * Show the form for creating a new ProductCost.
	 * GET|HEAD /productCosts/create
	 *
	 * @return Response
	 */
	public function create()
	{
	}

	/**
	 * Store a newly created ProductCost in storage.
	 * POST /productCosts
	 *
	 * @param Request $request
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		if(sizeof(ProductCost::$rules) > 0)
			$this->validateRequestOrFail($request, ProductCost::$rules);

		$input = $request->all();

		$productCosts = $this->productCostRepository->create($input);

		return $this->sendResponse($productCosts->toArray(), "ProductCost saved successfully");
	}

	/**
	 * Display the specified ProductCost.
	 * GET|HEAD /productCosts/{id}
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$productCost = $this->productCostRepository->apiFindOrFail($id);

		return $this->sendResponse($productCost->toArray(), "ProductCost retrieved successfully");
	}

	/**
	 * Show the form for editing the specified ProductCost.
	 * GET|HEAD /productCosts/{id}/edit
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
	 * Update the specified ProductCost in storage.
	 * PUT/PATCH /productCosts/{id}
	 *
	 * @param  int              $id
	 * @param Request $request
	 *
	 * @return Response
	 */
	public function update($id, Request $request)
	{
		$input = $request->all();

		/** @var ProductCost $productCost */
		$productCost = $this->productCostRepository->apiFindOrFail($id);

		$result = $this->productCostRepository->updateRich($input, $id);

		$productCost = $productCost->fresh();

		return $this->sendResponse($productCost->toArray(), "ProductCost updated successfully");
	}

	/**
	 * Remove the specified ProductCost from storage.
	 * DELETE /productCosts/{id}
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		$this->productCostRepository->apiDeleteOrFail($id);

		return $this->sendResponse($id, "ProductCost deleted successfully");
	}
}
