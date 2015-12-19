

<!-- Bill Id Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('bill_id', 'Bill Id:') !!}
	{!! Form::number('bill_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Product Detail Id Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('product_detail_id', 'Product Detail Id:') !!}
	{!! Form::number('product_detail_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Cantidad Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('cantidad', 'Cantidad:') !!}
	{!! Form::number('cantidad', null, ['class' => 'form-control']) !!}
</div>

<!-- Valor Unitario Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('valor_unitario', 'Valor Unitario:') !!}
	{!! Form::number('valor_unitario', null, ['class' => 'form-control']) !!}
</div>

<!-- Valor Total Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('valor_total', 'Valor Total:') !!}
	{!! Form::number('valor_total', null, ['class' => 'form-control']) !!}
</div>




<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
</div>
