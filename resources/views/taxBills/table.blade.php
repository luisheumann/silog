<table class="table">
    <thead>
    <th>Id</th>
			<th>Bill Id</th>
			<th>Tax Id</th>
			<th>Porcentaje</th>
			<th>Valor Base</th>
			<th>Total</th>
			<th>Created At</th>
			<th>Updated At</th>
    <th width="50px">Action</th>
    </thead>
    <tbody>
    @foreach($taxBills as $taxBill)
        <tr>
            <td>{!! $taxBill->id !!}</td>
			<td>{!! $taxBill->bill_id !!}</td>
			<td>{!! $taxBill->tax_id !!}</td>
			<td>{!! $taxBill->porcentaje !!}</td>
			<td>{!! $taxBill->valor_base !!}</td>
			<td>{!! $taxBill->total !!}</td>
			<td>{!! $taxBill->created_at !!}</td>
			<td>{!! $taxBill->updated_at !!}</td>
            <td>
                <a href="{!! route('taxBills.edit', [$taxBill->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                <a href="{!! route('taxBills.delete', [$taxBill->id]) !!}" onclick="return confirm('Are you sure wants to delete this TaxBill?')"><i class="glyphicon glyphicon-remove"></i></a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
