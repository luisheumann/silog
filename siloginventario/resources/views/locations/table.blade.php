<table class="table">
    <thead>
    <th>Id</th>
			<th>Id Sucursal</th>
			<th>Detalle</th>
			<th>Created At</th>
			<th>Updated At</th>
    <th width="50px">Action</th>
    </thead>
    <tbody>
    @foreach($locations as $location)
        <tr>
            <td>{!! $location->id !!}</td>
			<td>{!! $location->id_sucursal !!}</td>
			<td>{!! $location->detalle !!}</td>
			<td>{!! $location->created_at !!}</td>
			<td>{!! $location->updated_at !!}</td>
            <td>
                <a href="{!! route('locations.edit', [$location->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                <a href="{!! route('locations.delete', [$location->id]) !!}" onclick="return confirm('Are you sure wants to delete this Location?')"><i class="glyphicon glyphicon-remove"></i></a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
