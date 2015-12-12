<!-- Id Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('id', 'Id:') !!}
	{!! Form::number('id', null, ['class' => 'form-control']) !!}
</div>

<!-- Product Detail Id Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('product_detail_id', 'Product Detail Id:') !!}
	{!! Form::number('product_detail_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Sucursal Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('id_sucursal', 'Id Sucursal:') !!}
	{!! Form::number('id_sucursal', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Proveedor Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('id_proveedor', 'Id Proveedor:') !!}
	{!! Form::number('id_proveedor', null, ['class' => 'form-control']) !!}
</div>

<!-- Fecha Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('fecha', 'Fecha:') !!}
	{!! Form::date('fecha', null, ['class' => 'form-control']) !!}
</div>

<!-- Descripcion Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('descripcion', 'Descripcion:') !!}
	{!! Form::text('descripcion', null, ['class' => 'form-control']) !!}
</div>

<!-- Valor Unitario Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('valor_unitario', 'Valor Unitario:') !!}
	{!! Form::number('valor_unitario', null, ['class' => 'form-control']) !!}
</div>

<!-- Valor Entrada Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('valor_entrada', 'Valor Entrada:') !!}
	{!! Form::number('valor_entrada', null, ['class' => 'form-control']) !!}
</div>

<!-- Valor Salida Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('valor_salida', 'Valor Salida:') !!}
	{!! Form::number('valor_salida', null, ['class' => 'form-control']) !!}
</div>

<!-- Valor Saldo Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('valor_saldo', 'Valor Saldo:') !!}
	{!! Form::number('valor_saldo', null, ['class' => 'form-control']) !!}
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
