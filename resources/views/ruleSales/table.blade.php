<table class="table">
    <thead>
    <th>Id</th>
			<th>Nombre</th>
			<th>Descripcion</th>
			<th>Valor</th>
			<th>Variacion</th>
			<th>Created At</th>
			<th>Updated At</th>
			<th>Id Usuario Cre</th>
			<th>Id Usuario Mod</th>
    <th width="50px">Action</th>
    </thead>
    <tbody>
    @foreach($ruleSales as $ruleSale)
        <tr>
            <td>{!! $ruleSale->id !!}</td>
			<td>{!! $ruleSale->nombre !!}</td>
			<td>{!! $ruleSale->descripcion !!}</td>
			<td>{!! $ruleSale->valor !!}</td>
			<td>{!! $ruleSale->variacion !!}</td>
			<td>{!! $ruleSale->created_at !!}</td>
			<td>{!! $ruleSale->updated_at !!}</td>
			<td>{!! $ruleSale->id_usuario_cre !!}</td>
			<td>{!! $ruleSale->id_usuario_mod !!}</td>
            <td>
                <a href="{!! route('ruleSales.edit', [$ruleSale->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                <a href="{!! route('ruleSales.delete', [$ruleSale->id]) !!}" onclick="return confirm('Are you sure wants to delete this RuleSale?')"><i class="glyphicon glyphicon-remove"></i></a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
