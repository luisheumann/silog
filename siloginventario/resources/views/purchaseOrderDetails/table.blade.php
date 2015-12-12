<table class="table">
    <thead>
    <th>Id</th>
			<th>Purchese Order Id</th>
			<th>Cantidad</th>
			<th>Valor Unitario</th>
			<th>Valor Total</th>
			<th>Product Detail Id</th>
			<th>Created At</th>
			<th>Updated At</th>
    <th width="50px">Action</th>
    </thead>
    <tbody>
    @foreach($purchaseOrderDetails as $purchaseOrderDetail)
        <tr>
            <td>{!! $purchaseOrderDetail->id !!}</td>
			<td>{!! $purchaseOrderDetail->purchese_order_id !!}</td>
			<td>{!! $purchaseOrderDetail->cantidad !!}</td>
			<td>{!! $purchaseOrderDetail->valor_unitario !!}</td>
			<td>{!! $purchaseOrderDetail->valor_total !!}</td>
			<td>{!! $purchaseOrderDetail->product_detail_id !!}</td>
			<td>{!! $purchaseOrderDetail->created_at !!}</td>
			<td>{!! $purchaseOrderDetail->updated_at !!}</td>
            <td>
                <a href="{!! route('purchaseOrderDetails.edit', [$purchaseOrderDetail->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                <a href="{!! route('purchaseOrderDetails.delete', [$purchaseOrderDetail->id]) !!}" onclick="return confirm('Are you sure wants to delete this PurchaseOrderDetail?')"><i class="glyphicon glyphicon-remove"></i></a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
