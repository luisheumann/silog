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

<!-- Unit Id Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('unit_id', 'Unit Id:') !!}
	{!! Form::number('unit_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Category Id Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('category_id', 'Category Id:') !!}
	{!! Form::number('category_id', null, ['class' => 'form-control']) !!}
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
