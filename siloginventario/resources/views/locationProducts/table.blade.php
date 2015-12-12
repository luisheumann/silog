<table class="table">
    <thead>
    <th>Id</th>
			<th>Product Detail Id</th>
			<th>Location Id</th>
			<th>Saldo</th>
			<th>Cantidad Max</th>
			<th>Cantidad Min</th>
			<th>Created At</th>
			<th>Updated At</th>
			<th>Id Usuario Cre</th>
			<th>Id Usuario Mod</th>
    <th width="50px">Action</th>
    </thead>
    <tbody>
    @foreach($locationProducts as $locationProduct)
        <tr>
            <td>{!! $locationProduct->id !!}</td>
			<td>{!! $locationProduct->product_detail_id !!}</td>
			<td>{!! $locationProduct->location_id !!}</td>
			<td>{!! $locationProduct->saldo !!}</td>
			<td>{!! $locationProduct->cantidad_max !!}</td>
			<td>{!! $locationProduct->cantidad_min !!}</td>
			<td>{!! $locationProduct->created_at !!}</td>
			<td>{!! $locationProduct->updated_at !!}</td>
			<td>{!! $locationProduct->id_usuario_cre !!}</td>
			<td>{!! $locationProduct->id_usuario_mod !!}</td>
            <td>
                <a href="{!! route('locationProducts.edit', [$locationProduct->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                <a href="{!! route('locationProducts.delete', [$locationProduct->id]) !!}" onclick="return confirm('Are you sure wants to delete this LocationProduct?')"><i class="glyphicon glyphicon-remove"></i></a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
