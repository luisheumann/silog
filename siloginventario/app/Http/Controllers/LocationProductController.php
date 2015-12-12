<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateLocationProductRequest;
use App\Http\Requests\UpdateLocationProductRequest;
use App\Libraries\Repositories\LocationProductRepository;
use Flash;
use Mitul\Controller\AppBaseController as AppBaseController;
use Response;

class LocationProductController extends AppBaseController
{

	/** @var  LocationProductRepository */
	private $locationProductRepository;

	function __construct(LocationProductRepository $locationProductRepo)
	{
		$this->locationProductRepository = $locationProductRepo;
	}

	/**
	 * Display a listing of the LocationProduct.
	 *
	 * @return Response
	 */
	public function index()
	{
		$locationProducts = $this->locationProductRepository->paginate(10);

		return view('locationProducts.index')
			->with('locationProducts', $locationProducts);
	}

	/**
	 * Show the form for creating a new LocationProduct.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('locationProducts.create');
	}

	/**
	 * Store a newly created LocationProduct in storage.
	 *
	 * @param CreateLocationProductRequest $request
	 *
	 * @return Response
	 */
	public function store(CreateLocationProductRequest $request)
	{
		$input = $request->all();

		$locationProduct = $this->locationProductRepository->create($input);

		Flash::success('LocationProduct saved successfully.');

		return redirect(route('locationProducts.index'));
	}

	/**
	 * Display the specified LocationProduct.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$locationProduct = $this->locationProductRepository->find($id);

		if(empty($locationProduct))
		{
			Flash::error('LocationProduct not found');

			return redirect(route('locationProducts.index'));
		}

		return view('locationProducts.show')->with('locationProduct', $locationProduct);
	}

	/**
	 * Show the form for editing the specified LocationProduct.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function edit($id)
	{
		$locationProduct = $this->locationProductRepository->find($id);

		if(empty($locationProduct))
		{
			Flash::error('LocationProduct not found');

			return redirect(route('locationProducts.index'));
		}

		return view('locationProducts.edit')->with('locationProduct', $locationProduct);
	}

	/**
	 * Update the specified LocationProduct in storage.
	 *
	 * @param  int              $id
	 * @param UpdateLocationProductRequest $request
	 *
	 * @return Response
	 */
	public function update($id, UpdateLocationProductRequest $request)
	{
		$locationProduct = $this->locationProductRepository->find($id);

		if(empty($locationProduct))
		{
			Flash::error('LocationProduct not found');

			return redirect(route('locationProducts.index'));
		}

		$this->locationProductRepository->updateRich($request->all(), $id);

		Flash::success('LocationProduct updated successfully.');

		return redirect(route('locationProducts.index'));
	}

	/**
	 * Remove the specified LocationProduct from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		$locationProduct = $this->locationProductRepository->find($id);

		if(empty($locationProduct))
		{
			Flash::error('LocationProduct not found');

			return redirect(route('locationProducts.index'));
		}

		$this->locationProductRepository->delete($id);

		Flash::success('LocationProduct deleted successfully.');

		return redirect(route('locationProducts.index'));
	}
}
