<!-- Id Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('id', 'Id:') !!}
	{!! Form::number('id', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Proveedor Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('id_proveedor', 'Id Proveedor:') !!}
	{!! Form::number('id_proveedor', null, ['class' => 'form-control']) !!}
</div>

<!-- Fecha Pedido Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('fecha_pedido', 'Fecha Pedido:') !!}
	{!! Form::date('fecha_pedido', null, ['class' => 'form-control']) !!}
</div>

<!-- Fecha Pago Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('fecha_pago', 'Fecha Pago:') !!}
	{!! Form::date('fecha_pago', null, ['class' => 'form-control']) !!}
</div>

<!-- Nro Orden Compra Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('nro_orden_compra', 'Nro Orden Compra:') !!}
	{!! Form::number('nro_orden_compra', null, ['class' => 'form-control']) !!}
</div>

<!-- Observacion Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('observacion', 'Observacion:') !!}
	{!! Form::textarea('observacion', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Sucursal Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('id_sucursal', 'Id Sucursal:') !!}
	{!! Form::number('id_sucursal', null, ['class' => 'form-control']) !!}
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
