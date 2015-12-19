<?php namespace App\Http\Controllers\API;

use App\Http\Requests;
use App\Libraries\Repositories\FormPaymentRepository;
use App\Models\FormPayment;
use Illuminate\Http\Request;
use Mitul\Controller\AppBaseController as AppBaseController;
use Response;

class FormPaymentAPIController extends AppBaseController
{
	/** @var  FormPaymentRepository */
	private $formPaymentRepository;

	function __construct(FormPaymentRepository $formPaymentRepo)
	{
		$this->formPaymentRepository = $formPaymentRepo;
	}

	/**
	 * Display a listing of the FormPayment.
	 * GET|HEAD /formPayments
	 *
	 * @return Response
	 */
	public function index()
	{
		$formPayments = $this->formPaymentRepository->all();

		return $this->sendResponse($formPayments->toArray(), "FormPayments retrieved successfully");
	}

	/**
	 * Show the form for creating a new FormPayment.
	 * GET|HEAD /formPayments/create
	 *
	 * @return Response
	 */
	public function create()
	{
	}

	/**
	 * Store a newly created FormPayment in storage.
	 * POST /formPayments
	 *
	 * @param Request $request
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		if(sizeof(FormPayment::$rules) > 0)
			$this->validateRequestOrFail($request, FormPayment::$rules);

		$input = $request->all();

		$formPayments = $this->formPaymentRepository->create($input);

		return $this->sendResponse($formPayments->toArray(), "FormPayment saved successfully");
	}

	/**
	 * Display the specified FormPayment.
	 * GET|HEAD /formPayments/{id}
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$formPayment = $this->formPaymentRepository->apiFindOrFail($id);

		return $this->sendResponse($formPayment->toArray(), "FormPayment retrieved successfully");
	}

	/**
	 * Show the form for editing the specified FormPayment.
	 * GET|HEAD /formPayments/{id}/edit
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
	 * Update the specified FormPayment in storage.
	 * PUT/PATCH /formPayments/{id}
	 *
	 * @param  int              $id
	 * @param Request $request
	 *
	 * @return Response
	 */
	public function update($id, Request $request)
	{
		$input = $request->all();

		/** @var FormPayment $formPayment */
		$formPayment = $this->formPaymentRepository->apiFindOrFail($id);

		$result = $this->formPaymentRepository->updateRich($input, $id);

		$formPayment = $formPayment->fresh();

		return $this->sendResponse($formPayment->toArray(), "FormPayment updated successfully");
	}

	/**
	 * Remove the specified FormPayment from storage.
	 * DELETE /formPayments/{id}
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		$this->formPaymentRepository->apiDeleteOrFail($id);

		return $this->sendResponse($id, "FormPayment deleted successfully");
	}
}
