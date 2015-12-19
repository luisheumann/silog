<table class="table">
    <thead>
    <th>Id</th>
			<th>Nombre</th>
			<th>Created At</th>
			<th>Updated At</th>
    <th width="50px">Action</th>
    </thead>
    <tbody>
    @foreach($brands as $brand)
        <tr>
            <td>{!! $brand->id !!}</td>
			<td>{!! $brand->nombre !!}</td>
			<td>{!! $brand->created_at !!}</td>
			<td>{!! $brand->updated_at !!}</td>
            <td>
                <a href="{!! route('brands.edit', [$brand->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                <a href="{!! route('brands.delete', [$brand->id]) !!}" onclick="return confirm('Are you sure wants to delete this Brand?')"><i class="glyphicon glyphicon-remove"></i></a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
