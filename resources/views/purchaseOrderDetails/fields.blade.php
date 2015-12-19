<!-- Id Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('id', 'Id:') !!}
	{!! Form::number('id', null, ['class' => 'form-control']) !!}
</div>

<!-- Purchese Order Id Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('purchese_order_id', 'Purchese Order Id:') !!}
	{!! Form::number('purchese_order_id', null, ['class' => 'form-control']) !!}
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

<!-- Product Detail Id Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('product_detail_id', 'Product Detail Id:') !!}
	{!! Form::number('product_detail_id', null, ['class' => 'form-control']) !!}
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
