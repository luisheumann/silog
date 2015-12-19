<!-- Id Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('id', 'Id:') !!}
	{!! Form::number('id', null, ['class' => 'form-control']) !!}
</div>

<!-- Nombre Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('nombre', 'Nombre:') !!}
	{!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>

<!-- Descripcion Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('descripcion', 'Descripcion:') !!}
	{!! Form::text('descripcion', null, ['class' => 'form-control']) !!}
</div>

<!-- Valor Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('valor', 'Valor:') !!}
	{!! Form::number('valor', null, ['class' => 'form-control']) !!}
</div>

<!-- Variacion Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('variacion', 'Variacion:') !!}
	{!! Form::text('variacion', null, ['class' => 'form-control']) !!}
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
