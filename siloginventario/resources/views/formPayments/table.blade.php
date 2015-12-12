<table class="table">
    <thead>
    <th>Id</th>
			<th>Nombre</th>
			<th>Created At</th>
			<th>Updated At</th>
    <th width="50px">Action</th>
    </thead>
    <tbody>
    @foreach($formPayments as $formPayment)
        <tr>
            <td>{!! $formPayment->id !!}</td>
			<td>{!! $formPayment->nombre !!}</td>
			<td>{!! $formPayment->created_at !!}</td>
			<td>{!! $formPayment->updated_at !!}</td>
            <td>
                <a href="{!! route('formPayments.edit', [$formPayment->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                <a href="{!! route('formPayments.delete', [$formPayment->id]) !!}" onclick="return confirm('Are you sure wants to delete this FormPayment?')"><i class="glyphicon glyphicon-remove"></i></a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
