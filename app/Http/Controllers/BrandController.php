<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateBrandRequest;
use App\Http\Requests\UpdateBrandRequest;
use App\Libraries\Repositories\BrandRepository;
use Flash;
use Mitul\Controller\AppBaseController as AppBaseController;
use Response;

class BrandController extends AppBaseController
{

	/** @var  BrandRepository */
	private $brandRepository;

	function __construct(BrandRepository $brandRepo)
	{
		$this->brandRepository = $brandRepo;
	}

	/**
	 * Display a listing of the Brand.
	 *
	 * @return Response
	 */
	public function index()
	{
		$brands = $this->brandRepository->paginate(10);

		return view('brands.index')
			->with('brands', $brands);
	}

	/**
	 * Show the form for creating a new Brand.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('brands.create');
	}

	/**
	 * Store a newly created Brand in storage.
	 *
	 * @param CreateBrandRequest $request
	 *
	 * @return Response
	 */
	public function store(CreateBrandRequest $request)
	{
		$input = $request->all();

		$brand = $this->brandRepository->create($input);

		Flash::success('Brand saved successfully.');

		return redirect(route('brands.index'));
	}

	/**
	 * Display the specified Brand.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$brand = $this->brandRepository->find($id);

		if(empty($brand))
		{
			Flash::error('Brand not found');

			return redirect(route('brands.index'));
		}

		return view('brands.show')->with('brand', $brand);
	}

	/**
	 * Show the form for editing the specified Brand.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function edit($id)
	{
		$brand = $this->brandRepository->find($id);

		if(empty($brand))
		{
			Flash::error('Brand not found');

			return redirect(route('brands.index'));
		}

		return view('brands.edit')->with('brand', $brand);
	}

	/**
	 * Update the specified Brand in storage.
	 *
	 * @param  int              $id
	 * @param UpdateBrandRequest $request
	 *
	 * @return Response
	 */
	public function update($id, UpdateBrandRequest $request)
	{
		$brand = $this->brandRepository->find($id);

		if(empty($brand))
		{
			Flash::error('Brand not found');

			return redirect(route('brands.index'));
		}

		$this->brandRepository->updateRich($request->all(), $id);

		Flash::success('Brand updated successfully.');

		return redirect(route('brands.index'));
	}

	/**
	 * Remove the specified Brand from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		$brand = $this->brandRepository->find($id);

		if(empty($brand))
		{
			Flash::error('Brand not found');

			return redirect(route('brands.index'));
		}

		$this->brandRepository->delete($id);

		Flash::success('Brand deleted successfully.');

		return redirect(route('brands.index'));
	}
}
