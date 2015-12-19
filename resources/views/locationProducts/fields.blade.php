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

<!-- Location Id Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('location_id', 'Location Id:') !!}
	{!! Form::number('location_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Saldo Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('saldo', 'Saldo:') !!}
	{!! Form::number('saldo', null, ['class' => 'form-control']) !!}
</div>

<!-- Cantidad Max Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('cantidad_max', 'Cantidad Max:') !!}
	{!! Form::number('cantidad_max', null, ['class' => 'form-control']) !!}
</div>

<!-- Cantidad Min Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('cantidad_min', 'Cantidad Min:') !!}
	{!! Form::number('cantidad_min', null, ['class' => 'form-control']) !!}
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

<!-- Id Usuario Cre Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('id_usuario_cre', 'Id Usuario Cre:') !!}
	{!! Form::number('id_usuario_cre', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Usuario Mod Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('id_usuario_mod', 'Id Usuario Mod:') !!}
	{!! Form::number('id_usuario_mod', null, ['class' => 'form-control']) !!}
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
</div>
