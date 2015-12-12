<table class="table">
    <thead>
    <th>Id</th>
			<th>Nombre</th>
			<th>Created At</th>
			<th>Updated At</th>
    <th width="50px">Action</th>
    </thead>
    <tbody>
    @foreach($stateBills as $stateBill)
        <tr>
            <td>{!! $stateBill->id !!}</td>
			<td>{!! $stateBill->nombre !!}</td>
			<td>{!! $stateBill->created_at !!}</td>
			<td>{!! $stateBill->updated_at !!}</td>
            <td>
                <a href="{!! route('stateBills.edit', [$stateBill->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                <a href="{!! route('stateBills.delete', [$stateBill->id]) !!}" onclick="return confirm('Are you sure wants to delete this StateBill?')"><i class="glyphicon glyphicon-remove"></i></a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
