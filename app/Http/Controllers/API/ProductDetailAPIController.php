<?php namespace App\Http\Controllers\API;

use App\Http\Requests;
use App\Libraries\Repositories\ProductDetailRepository;
use App\Models\ProductDetail;
use Illuminate\Http\Request;
use Mitul\Controller\AppBaseController as AppBaseController;
use Response;

class ProductDetailAPIController extends AppBaseController
{
	/** @var  ProductDetailRepository */
	private $productDetailRepository;

	function __construct(ProductDetailRepository $productDetailRepo)
	{
		$this->productDetailRepository = $productDetailRepo;
	}

	/**
	 * Display a listing of the ProductDetail.
	 * GET|HEAD /productDetails
	 *
	 * @return Response
	 */
	public function index()
	{
		$productDetails = $this->productDetailRepository->all();

		return $this->sendResponse($productDetails->toArray(), "ProductDetails retrieved successfully");
	}

	/**
	 * Show the form for creating a new ProductDetail.
	 * GET|HEAD /productDetails/create
	 *
	 * @return Response
	 */
	public function create()
	{
	}

	/**
	 * Store a newly created ProductDetail in storage.
	 * POST /productDetails
	 *
	 * @param Request $request
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		if(sizeof(ProductDetail::$rules) > 0)
			$this->validateRequestOrFail($request, ProductDetail::$rules);

		$input = $request->all();

		$productDetails = $this->productDetailRepository->create($input);

		return $this->sendResponse($productDetails->toArray(), "ProductDetail saved successfully");
	}

	/**
	 * Display the specified ProductDetail.
	 * GET|HEAD /productDetails/{id}
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$productDetail = $this->productDetailRepository->apiFindOrFail($id);

		return $this->sendResponse($productDetail->toArray(), "ProductDetail retrieved successfully");
	}

	/**
	 * Show the form for editing the specified ProductDetail.
	 * GET|HEAD /productDetails/{id}/edit
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
	 * Update the specified ProductDetail in storage.
	 * PUT/PATCH /productDetails/{id}
	 *
	 * @param  int              $id
	 * @param Request $request
	 *
	 * @return Response
	 */
	public function update($id, Request $request)
	{
		$input = $request->all();

		/** @var ProductDetail $productDetail */
		$productDetail = $this->productDetailRepository->apiFindOrFail($id);

		$result = $this->productDetailRepository->updateRich($input, $id);

		$productDetail = $productDetail->fresh();

		return $this->sendResponse($productDetail->toArray(), "ProductDetail updated successfully");
	}

	/**
	 * Remove the specified ProductDetail from storage.
	 * DELETE /productDetails/{id}
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		$this->productDetailRepository->apiDeleteOrFail($id);

		return $this->sendResponse($id, "ProductDetail deleted successfully");
	}
}
