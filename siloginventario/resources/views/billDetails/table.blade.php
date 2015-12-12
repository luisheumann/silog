<table class="table">
    <thead>
    <th>Id</th>
			<th>Bill Id</th>
			<th>Product Detail Id</th>
			<th>Cantidad</th>
			<th>Valor Unitario</th>
			<th>Valor Total</th>
			<th>Created At</th>
			<th>Updated At</th>
    <th width="50px">Action</th>
    </thead>
    <tbody>
    @foreach($billDetails as $billDetail)
        <tr>
            <td>{!! $billDetail->id !!}</td>
			<td>{!! $billDetail->bill_id !!}</td>
			<td>{!! $billDetail->product_detail_id !!}</td>
			<td>{!! $billDetail->cantidad !!}</td>
			<td>{!! $billDetail->valor_unitario !!}</td>
			<td>{!! $billDetail->valor_total !!}</td>
			<td>{!! $billDetail->created_at !!}</td>
			<td>{!! $billDetail->updated_at !!}</td>
            <td>
                <a href="{!! route('billDetails.edit', [$billDetail->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                <a href="{!! route('billDetails.delete', [$billDetail->id]) !!}" onclick="return confirm('Are you sure wants to delete this BillDetail?')"><i class="glyphicon glyphicon-remove"></i></a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
