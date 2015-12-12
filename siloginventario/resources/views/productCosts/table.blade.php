<table class="table">
    <thead>
    <th>Id</th>
			<th>Id Sucursal</th>
			<th>Product Detail Id</th>
			<th>Rule Sale Id</th>
			<th>Fecha Inicio</th>
			<th>Fecha Fin</th>
			<th>Created At</th>
			<th>Updated At</th>
    <th width="50px">Action</th>
    </thead>
    <tbody>
    @foreach($productCosts as $productCost)
        <tr>
            <td>{!! $productCost->id !!}</td>
			<td>{!! $productCost->id_sucursal !!}</td>
			<td>{!! $productCost->product_detail_id !!}</td>
			<td>{!! $productCost->rule_sale_id !!}</td>
			<td>{!! $productCost->fecha_inicio !!}</td>
			<td>{!! $productCost->fecha_fin !!}</td>
			<td>{!! $productCost->created_at !!}</td>
			<td>{!! $productCost->updated_at !!}</td>
            <td>
                <a href="{!! route('productCosts.edit', [$productCost->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                <a href="{!! route('productCosts.delete', [$productCost->id]) !!}" onclick="return confirm('Are you sure wants to delete this ProductCost?')"><i class="glyphicon glyphicon-remove"></i></a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
