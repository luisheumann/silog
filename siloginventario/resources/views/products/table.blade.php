<table class="table">
    <thead>
    <th>Id</th>
			<th>Nombre</th>
			<th>Unit Id</th>
			<th>Category Id</th>
			<th>Created At</th>
			<th>Updated At</th>
			<th>Id Usuario Cre</th>
			<th>Id Usuario Mod</th>
    <th width="50px">Action</th>
    </thead>
    <tbody>
    @foreach($products as $product)
        <tr>
            <td>{!! $product->id !!}</td>
			<td>{!! $product->nombre !!}</td>
			<td>{!! $product->unit_id !!}</td>
			<td>{!! $product->category_id !!}</td>
			<td>{!! $product->created_at !!}</td>
			<td>{!! $product->updated_at !!}</td>
			<td>{!! $product->id_usuario_cre !!}</td>
			<td>{!! $product->id_usuario_mod !!}</td>
            <td>
                <a href="{!! route('products.edit', [$product->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                <a href="{!! route('products.delete', [$product->id]) !!}" onclick="return confirm('Are you sure wants to delete this Product?')"><i class="glyphicon glyphicon-remove"></i></a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
