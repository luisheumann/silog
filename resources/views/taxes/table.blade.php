<table class="table">
    <thead>
    <th>Id</th>
			<th>Nombre</th>
			<th>Created At</th>
			<th>Updated At</th>
    <th width="50px">Action</th>
    </thead>
    <tbody>
    @foreach($taxes as $tax)
        <tr>
            <td>{!! $tax->id !!}</td>
			<td>{!! $tax->nombre !!}</td>
			<td>{!! $tax->created_at !!}</td>
			<td>{!! $tax->updated_at !!}</td>
            <td>
                <a href="{!! route('taxes.edit', [$tax->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                <a href="{!! route('taxes.delete', [$tax->id]) !!}" onclick="return confirm('Are you sure wants to delete this Tax?')"><i class="glyphicon glyphicon-remove"></i></a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
