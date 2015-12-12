<table class="table">
    <thead>
    <th>Id</th>
			<th>Forms Payments Id</th>
			<th>Id Proveedor</th>
			<th>Id Persona</th>
			<th>Id Vehiculo</th>
			<th>Fecha</th>
			<th>Numero Factura</th>
			<th>Valor Total</th>
			<th>Valor Impuesto</th>
			<th>Valor Factura</th>
			<th>Valor Abono</th>
			<th>Saldo Actual</th>
			<th>State Bill Id</th>
			<th>Fecha Cobro</th>
			<th>Observacion</th>
			<th>Resolucion</th>
			<th>Tax Bill Id</th>
			<th>Valor Descuento</th>
			<th>Created At</th>
			<th>Updated At</th>
			<th>Id Usuario Cre</th>
			<th>Id Usuario Mod</th>
    <th width="50px">Action</th>
    </thead>
    <tbody>
    @foreach($bills as $bill)
        <tr>
            <td>{!! $bill->id !!}</td>
			<td>{!! $bill->forms_payments_id !!}</td>
			<td>{!! $bill->id_proveedor !!}</td>
			<td>{!! $bill->id_persona !!}</td>
			<td>{!! $bill->id_vehiculo !!}</td>
			<td>{!! $bill->fecha !!}</td>
			<td>{!! $bill->numero_factura !!}</td>
			<td>{!! $bill->valor_total !!}</td>
			<td>{!! $bill->valor_impuesto !!}</td>
			<td>{!! $bill->valor_factura !!}</td>
			<td>{!! $bill->valor_abono !!}</td>
			<td>{!! $bill->saldo_actual !!}</td>
			<td>{!! $bill->state_bill_id !!}</td>
			<td>{!! $bill->fecha_cobro !!}</td>
			<td>{!! $bill->observacion !!}</td>
			<td>{!! $bill->resolucion !!}</td>
			<td>{!! $bill->tax_bill_id !!}</td>
			<td>{!! $bill->valor_descuento !!}</td>
			<td>{!! $bill->created_at !!}</td>
			<td>{!! $bill->updated_at !!}</td>
			<td>{!! $bill->id_usuario_cre !!}</td>
			<td>{!! $bill->id_usuario_mod !!}</td>
            <td>
                <a href="{!! route('bills.edit', [$bill->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                <a href="{!! route('bills.delete', [$bill->id]) !!}" onclick="return confirm('Are you sure wants to delete this Bill?')"><i class="glyphicon glyphicon-remove"></i></a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
