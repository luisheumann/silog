<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $billDetail->id !!}</p>
</div>

<!-- Bill Id Field -->
<div class="form-group">
    {!! Form::label('bill_id', 'Bill Id:') !!}
    <p>{!! $billDetail->bill_id !!}</p>
</div>

<!-- Product Detail Id Field -->
<div class="form-group">
    {!! Form::label('product_detail_id', 'Product Detail Id:') !!}
    <p>{!! $billDetail->product_detail_id !!}</p>
</div>

<!-- Cantidad Field -->
<div class="form-group">
    {!! Form::label('cantidad', 'Cantidad:') !!}
    <p>{!! $billDetail->cantidad !!}</p>
</div>

<!-- Valor Unitario Field -->
<div class="form-group">
    {!! Form::label('valor_unitario', 'Valor Unitario:') !!}
    <p>{!! $billDetail->valor_unitario !!}</p>
</div>

<!-- Valor Total Field -->
<div class="form-group">
    {!! Form::label('valor_total', 'Valor Total:') !!}
    <p>{!! $billDetail->valor_total !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $billDetail->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $billDetail->updated_at !!}</p>
</div>

