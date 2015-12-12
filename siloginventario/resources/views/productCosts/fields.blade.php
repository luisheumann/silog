<!-- Id Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('id', 'Id:') !!}
	{!! Form::number('id', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Sucursal Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('id_sucursal', 'Id Sucursal:') !!}
	{!! Form::number('id_sucursal', null, ['class' => 'form-control']) !!}
</div>

<!-- Product Detail Id Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('product_detail_id', 'Product Detail Id:') !!}
	{!! Form::number('product_detail_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Rule Sale Id Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('rule_sale_id', 'Rule Sale Id:') !!}
	{!! Form::number('rule_sale_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Fecha Inicio Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('fecha_inicio', 'Fecha Inicio:') !!}
	{!! Form::date('fecha_inicio', null, ['class' => 'form-control']) !!}
</div>

<!-- Fecha Fin Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('fecha_fin', 'Fecha Fin:') !!}
	{!! Form::date('fecha_fin', null, ['class' => 'form-control']) !!}
</div>

<!-- Created At Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('created_at', 'Created At:') !!}
	{!! Form::date('created_at', null, ['class' => 'form-control']) !!}
</div>

<!-- Updated At Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('updated_at', 'Updated At:') !!}
	{!! Form::date('updated_at', null, ['class' => 'form-control']) !!}
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
</div>
