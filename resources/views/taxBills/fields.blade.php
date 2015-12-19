<!-- Id Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('id', 'Id:') !!}
	{!! Form::number('id', null, ['class' => 'form-control']) !!}
</div>

<!-- Bill Id Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('bill_id', 'Bill Id:') !!}
	{!! Form::number('bill_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Tax Id Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('tax_id', 'Tax Id:') !!}
	{!! Form::number('tax_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Porcentaje Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('porcentaje', 'Porcentaje:') !!}
	{!! Form::number('porcentaje', null, ['class' => 'form-control']) !!}
</div>

<!-- Valor Base Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('valor_base', 'Valor Base:') !!}
	{!! Form::number('valor_base', null, ['class' => 'form-control']) !!}
</div>

<!-- Total Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('total', 'Total:') !!}
	{!! Form::number('total', null, ['class' => 'form-control']) !!}
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
