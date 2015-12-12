<table class="table">
    <thead>
    <th>Id</th>
			<th>Id Proveedor</th>
			<th>Fecha Pedido</th>
			<th>Fecha Pago</th>
			<th>Nro Orden Compra</th>
			<th>Observacion</th>
			<th>Id Sucursal</th>
			<th>Created At</th>
			<th>Updated At</th>
    <th width="50px">Action</th>
    </thead>
    <tbody>
    @foreach($purchaseOrders as $purchaseOrder)
        <tr>
            <td>{!! $purchaseOrder->id !!}</td>
			<td>{!! $purchaseOrder->id_proveedor !!}</td>
			<td>{!! $purchaseOrder->fecha_pedido !!}</td>
			<td>{!! $purchaseOrder->fecha_pago !!}</td>
			<td>{!! $purchaseOrder->nro_orden_compra !!}</td>
			<td>{!! $purchaseOrder->observacion !!}</td>
			<td>{!! $purchaseOrder->id_sucursal !!}</td>
			<td>{!! $purchaseOrder->created_at !!}</td>
			<td>{!! $purchaseOrder->updated_at !!}</td>
            <td>
                <a href="{!! route('purchaseOrders.edit', [$purchaseOrder->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                <a href="{!! route('purchaseOrders.delete', [$purchaseOrder->id]) !!}" onclick="return confirm('Are you sure wants to delete this PurchaseOrder?')"><i class="glyphicon glyphicon-remove"></i></a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
