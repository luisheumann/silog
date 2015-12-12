<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $purchaseOrderDetail->id !!}</p>
</div>

<!-- Purchese Order Id Field -->
<div class="form-group">
    {!! Form::label('purchese_order_id', 'Purchese Order Id:') !!}
    <p>{!! $purchaseOrderDetail->purchese_order_id !!}</p>
</div>

<!-- Cantidad Field -->
<div class="form-group">
    {!! Form::label('cantidad', 'Cantidad:') !!}
    <p>{!! $purchaseOrderDetail->cantidad !!}</p>
</div>

<!-- Valor Unitario Field -->
<div class="form-group">
    {!! Form::label('valor_unitario', 'Valor Unitario:') !!}
    <p>{!! $purchaseOrderDetail->valor_unitario !!}</p>
</div>

<!-- Valor Total Field -->
<div class="form-group">
    {!! Form::label('valor_total', 'Valor Total:') !!}
    <p>{!! $purchaseOrderDetail->valor_total !!}</p>
</div>

<!-- Product Detail Id Field -->
<div class="form-group">
    {!! Form::label('product_detail_id', 'Product Detail Id:') !!}
    <p>{!! $purchaseOrderDetail->product_detail_id !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $purchaseOrderDetail->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $purchaseOrderDetail->updated_at !!}</p>
</div>

