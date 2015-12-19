<table class="table">
    <thead>
    <th>Id</th>
			<th>Nombre</th>
			<th>Created At</th>
			<th>Updated At</th>
    <th width="50px">Action</th>
    </thead>
    <tbody>
    @foreach($units as $unit)
        <tr>
            <td>{!! $unit->id !!}</td>
			<td>{!! $unit->nombre !!}</td>
			<td>{!! $unit->created_at !!}</td>
			<td>{!! $unit->updated_at !!}</td>
            <td>
                <a data-toggle="modal" data-target="#myModal" href="{!! route('units.edit', [$unit->id]) !!}"><i class="glyphicon glyphicon-edit bootstrap-modal-form-open"></i></a>
                <a href="{!! route('units.delete', [$unit->id]) !!}" onclick="return confirm('Are you sure wants to delete this Unit?')"><i class="glyphicon glyphicon-remove"></i></a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>


<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
    </div>
  </div>
</div>
