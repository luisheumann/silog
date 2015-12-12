<table class="table">
    <thead>
    <th>Id</th>
			<th>Nombre</th>
			<th>Created At</th>
			<th>Updated At</th>
    <th width="50px">Action</th>
    </thead>
    <tbody>
    @foreach($categories as $category)
        <tr>
            <td>{!! $category->id !!}</td>
			<td>{!! $category->nombre !!}</td>
			<td>{!! $category->created_at !!}</td>
			<td>{!! $category->updated_at !!}</td>
            <td>
                <a href="{!! route('categories.edit', [$category->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                <a href="{!! route('categories.delete', [$category->id]) !!}" onclick="return confirm('Are you sure wants to delete this Category?')"><i class="glyphicon glyphicon-remove"></i></a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
