<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateProductDetailRequest;
use App\Http\Requests\UpdateProductDetailRequest;
use App\Libraries\Repositories\ProductDetailRepository;
use Flash;
use Mitul\Controller\AppBaseController as AppBaseController;
use Response;

class ProductDetailController extends AppBaseController
{

	/** @var  ProductDetailRepository */
	private $productDetailRepository;

	function __construct(ProductDetailRepository $productDetailRepo)
	{
		$this->productDetailRepository = $productDetailRepo;
	}

	/**
	 * Display a listing of the ProductDetail.
	 *
	 * @return Response
	 */
	public function index()
	{
		$productDetails = $this->productDetailRepository->paginate(10);

		return view('productDetails.index')
			->with('productDetails', $productDetails);
	}

	/**
	 * Show the form for creating a new ProductDetail.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('productDetails.create');
	}

	/**
	 * Store a newly created ProductDetail in storage.
	 *
	 * @param CreateProductDetailRequest $request
	 *
	 * @return Response
	 */
	public function store(CreateProductDetailRequest $request)
	{
		$input = $request->all();

		$productDetail = $this->productDetailRepository->create($input);

		Flash::success('ProductDetail saved successfully.');

		return redirect(route('productDetails.index'));
	}

	/**
	 * Display the specified ProductDetail.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$productDetail = $this->productDetailRepository->find($id);

		if(empty($productDetail))
		{
			Flash::error('ProductDetail not found');

			return redirect(route('productDetails.index'));
		}

		return view('productDetails.show')->with('productDetail', $productDetail);
	}

	/**
	 * Show the form for editing the specified ProductDetail.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function edit($id)
	{
		$productDetail = $this->productDetailRepository->find($id);

		if(empty($productDetail))
		{
			Flash::error('ProductDetail not found');

			return redirect(route('productDetails.index'));
		}

		return view('productDetails.edit')->with('productDetail', $productDetail);
	}

	/**
	 * Update the specified ProductDetail in storage.
	 *
	 * @param  int              $id
	 * @param UpdateProductDetailRequest $request
	 *
	 * @return Response
	 */
	public function update($id, UpdateProductDetailRequest $request)
	{
		$productDetail = $this->productDetailRepository->find($id);

		if(empty($productDetail))
		{
			Flash::error('ProductDetail not found');

			return redirect(route('productDetails.index'));
		}

		$this->productDetailRepository->updateRich($request->all(), $id);

		Flash::success('ProductDetail updated successfully.');

		return redirect(route('productDetails.index'));
	}

	/**
	 * Remove the specified ProductDetail from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		$productDetail = $this->productDetailRepository->find($id);

		if(empty($productDetail))
		{
			Flash::error('ProductDetail not found');

			return redirect(route('productDetails.index'));
		}

		$this->productDetailRepository->delete($id);

		Flash::success('ProductDetail deleted successfully.');

		return redirect(route('productDetails.index'));
	}
}
