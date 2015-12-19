<table class="table">
    <thead>
    <th>Id</th>
			<th>Product Detail Id</th>
			<th>Id Sucursal</th>
			<th>Id Proveedor</th>
			<th>Fecha</th>
			<th>Descripcion</th>
			<th>Valor Unitario</th>
			<th>Valor Entrada</th>
			<th>Valor Salida</th>
			<th>Valor Saldo</th>
			<th>Created At</th>
			<th>Updated At</th>
    <th width="50px">Action</th>
    </thead>
    <tbody>
    @foreach($kardexes as $kardex)
        <tr>
            <td>{!! $kardex->id !!}</td>
			<td>{!! $kardex->product_detail_id !!}</td>
			<td>{!! $kardex->id_sucursal !!}</td>
			<td>{!! $kardex->id_proveedor !!}</td>
			<td>{!! $kardex->fecha !!}</td>
			<td>{!! $kardex->descripcion !!}</td>
			<td>{!! $kardex->valor_unitario !!}</td>
			<td>{!! $kardex->valor_entrada !!}</td>
			<td>{!! $kardex->valor_salida !!}</td>
			<td>{!! $kardex->valor_saldo !!}</td>
			<td>{!! $kardex->created_at !!}</td>
			<td>{!! $kardex->updated_at !!}</td>
            <td>
                <a href="{!! route('kardexes.edit', [$kardex->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                <a href="{!! route('kardexes.delete', [$kardex->id]) !!}" onclick="return confirm('Are you sure wants to delete this Kardex?')"><i class="glyphicon glyphicon-remove"></i></a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
