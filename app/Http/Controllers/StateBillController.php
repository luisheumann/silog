<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateStateBillRequest;
use App\Http\Requests\UpdateStateBillRequest;
use App\Libraries\Repositories\StateBillRepository;
use Flash;
use Mitul\Controller\AppBaseController as AppBaseController;
use Response;

class StateBillController extends AppBaseController
{

	/** @var  StateBillRepository */
	private $stateBillRepository;

	function __construct(StateBillRepository $stateBillRepo)
	{
		$this->stateBillRepository = $stateBillRepo;
	}

	/**
	 * Display a listing of the StateBill.
	 *
	 * @return Response
	 */
	public function index()
	{
		$stateBills = $this->stateBillRepository->paginate(10);

		return view('stateBills.index')
			->with('stateBills', $stateBills);
	}

	/**
	 * Show the form for creating a new StateBill.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('stateBills.create');
	}

	/**
	 * Store a newly created StateBill in storage.
	 *
	 * @param CreateStateBillRequest $request
	 *
	 * @return Response
	 */
	public function store(CreateStateBillRequest $request)
	{
		$input = $request->all();

		$stateBill = $this->stateBillRepository->create($input);

		Flash::success('StateBill saved successfully.');

		return redirect(route('stateBills.index'));
	}

	/**
	 * Display the specified StateBill.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$stateBill = $this->stateBillRepository->find($id);

		if(empty($stateBill))
		{
			Flash::error('StateBill not found');

			return redirect(route('stateBills.index'));
		}

		return view('stateBills.show')->with('stateBill', $stateBill);
	}

	/**
	 * Show the form for editing the specified StateBill.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function edit($id)
	{
		$stateBill = $this->stateBillRepository->find($id);

		if(empty($stateBill))
		{
			Flash::error('StateBill not found');

			return redirect(route('stateBills.index'));
		}

		return view('stateBills.edit')->with('stateBill', $stateBill);
	}

	/**
	 * Update the specified StateBill in storage.
	 *
	 * @param  int              $id
	 * @param UpdateStateBillRequest $request
	 *
	 * @return Response
	 */
	public function update($id, UpdateStateBillRequest $request)
	{
		$stateBill = $this->stateBillRepository->find($id);

		if(empty($stateBill))
		{
			Flash::error('StateBill not found');

			return redirect(route('stateBills.index'));
		}

		$this->stateBillRepository->updateRich($request->all(), $id);

		Flash::success('StateBill updated successfully.');

		return redirect(route('stateBills.index'));
	}

	/**
	 * Remove the specified StateBill from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		$stateBill = $this->stateBillRepository->find($id);

		if(empty($stateBill))
		{
			Flash::error('StateBill not found');

			return redirect(route('stateBills.index'));
		}

		$this->stateBillRepository->delete($id);

		Flash::success('StateBill deleted successfully.');

		return redirect(route('stateBills.index'));
	}
}
