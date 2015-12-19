<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateFormPaymentRequest;
use App\Http\Requests\UpdateFormPaymentRequest;
use App\Libraries\Repositories\FormPaymentRepository;
use Flash;
use Mitul\Controller\AppBaseController as AppBaseController;
use Response;

class FormPaymentController extends AppBaseController
{

	/** @var  FormPaymentRepository */
	private $formPaymentRepository;

	function __construct(FormPaymentRepository $formPaymentRepo)
	{
		$this->formPaymentRepository = $formPaymentRepo;
	}

	/**
	 * Display a listing of the FormPayment.
	 *
	 * @return Response
	 */
	public function index()
	{
		$formPayments = $this->formPaymentRepository->paginate(10);

		return view('formPayments.index')
			->with('formPayments', $formPayments);
	}

	/**
	 * Show the form for creating a new FormPayment.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('formPayments.create');
	}

	/**
	 * Store a newly created FormPayment in storage.
	 *
	 * @param CreateFormPaymentRequest $request
	 *
	 * @return Response
	 */
	public function store(CreateFormPaymentRequest $request)
	{
		$input = $request->all();

		$formPayment = $this->formPaymentRepository->create($input);

		Flash::success('FormPayment saved successfully.');

		return redirect(route('formPayments.index'));
	}

	/**
	 * Display the specified FormPayment.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$formPayment = $this->formPaymentRepository->find($id);

		if(empty($formPayment))
		{
			Flash::error('FormPayment not found');

			return redirect(route('formPayments.index'));
		}

		return view('formPayments.show')->with('formPayment', $formPayment);
	}

	/**
	 * Show the form for editing the specified FormPayment.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function edit($id)
	{
		$formPayment = $this->formPaymentRepository->find($id);

		if(empty($formPayment))
		{
			Flash::error('FormPayment not found');

			return redirect(route('formPayments.index'));
		}

		return view('formPayments.edit')->with('formPayment', $formPayment);
	}

	/**
	 * Update the specified FormPayment in storage.
	 *
	 * @param  int              $id
	 * @param UpdateFormPaymentRequest $request
	 *
	 * @return Response
	 */
	public function update($id, UpdateFormPaymentRequest $request)
	{
		$formPayment = $this->formPaymentRepository->find($id);

		if(empty($formPayment))
		{
			Flash::error('FormPayment not found');

			return redirect(route('formPayments.index'));
		}

		$this->formPaymentRepository->updateRich($request->all(), $id);

		Flash::success('FormPayment updated successfully.');

		return redirect(route('formPayments.index'));
	}

	/**
	 * Remove the specified FormPayment from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		$formPayment = $this->formPaymentRepository->find($id);

		if(empty($formPayment))
		{
			Flash::error('FormPayment not found');

			return redirect(route('formPayments.index'));
		}

		$this->formPaymentRepository->delete($id);

		Flash::success('FormPayment deleted successfully.');

		return redirect(route('formPayments.index'));
	}
}
