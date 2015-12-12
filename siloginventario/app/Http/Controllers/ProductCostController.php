<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateProductCostRequest;
use App\Http\Requests\UpdateProductCostRequest;
use App\Libraries\Repositories\ProductCostRepository;
use Flash;
use Mitul\Controller\AppBaseController as AppBaseController;
use Response;

class ProductCostController extends AppBaseController
{

	/** @var  ProductCostRepository */
	private $productCostRepository;

	function __construct(ProductCostRepository $productCostRepo)
	{
		$this->productCostRepository = $productCostRepo;
	}

	/**
	 * Display a listing of the ProductCost.
	 *
	 * @return Response
	 */
	public function index()
	{
		$productCosts = $this->productCostRepository->paginate(10);

		return view('productCosts.index')
			->with('productCosts', $productCosts);
	}

	/**
	 * Show the form for creating a new ProductCost.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('productCosts.create');
	}

	/**
	 * Store a newly created ProductCost in storage.
	 *
	 * @param CreateProductCostRequest $request
	 *
	 * @return Response
	 */
	public function store(CreateProductCostRequest $request)
	{
		$input = $request->all();

		$productCost = $this->productCostRepository->create($input);

		Flash::success('ProductCost saved successfully.');

		return redirect(route('productCosts.index'));
	}

	/**
	 * Display the specified ProductCost.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$productCost = $this->productCostRepository->find($id);

		if(empty($productCost))
		{
			Flash::error('ProductCost not found');

			return redirect(route('productCosts.index'));
		}

		return view('productCosts.show')->with('productCost', $productCost);
	}

	/**
	 * Show the form for editing the specified ProductCost.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function edit($id)
	{
		$productCost = $this->productCostRepository->find($id);

		if(empty($productCost))
		{
			Flash::error('ProductCost not found');

			return redirect(route('productCosts.index'));
		}

		return view('productCosts.edit')->with('productCost', $productCost);
	}

	/**
	 * Update the specified ProductCost in storage.
	 *
	 * @param  int              $id
	 * @param UpdateProductCostRequest $request
	 *
	 * @return Response
	 */
	public function update($id, UpdateProductCostRequest $request)
	{
		$productCost = $this->productCostRepository->find($id);

		if(empty($productCost))
		{
			Flash::error('ProductCost not found');

			return redirect(route('productCosts.index'));
		}

		$this->productCostRepository->updateRich($request->all(), $id);

		Flash::success('ProductCost updated successfully.');

		return redirect(route('productCosts.index'));
	}

	/**
	 * Remove the specified ProductCost from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		$productCost = $this->productCostRepository->find($id);

		if(empty($productCost))
		{
			Flash::error('ProductCost not found');

			return redirect(route('productCosts.index'));
		}

		$this->productCostRepository->delete($id);

		Flash::success('ProductCost deleted successfully.');

		return redirect(route('productCosts.index'));
	}
}
