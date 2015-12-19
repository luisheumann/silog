<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $purchaseOrder->id !!}</p>
</div>

<!-- Id Proveedor Field -->
<div class="form-group">
    {!! Form::label('id_proveedor', 'Id Proveedor:') !!}
    <p>{!! $purchaseOrder->id_proveedor !!}</p>
</div>

<!-- Fecha Pedido Field -->
<div class="form-group">
    {!! Form::label('fecha_pedido', 'Fecha Pedido:') !!}
    <p>{!! $purchaseOrder->fecha_pedido !!}</p>
</div>

<!-- Fecha Pago Field -->
<div class="form-group">
    {!! Form::label('fecha_pago', 'Fecha Pago:') !!}
    <p>{!! $purchaseOrder->fecha_pago !!}</p>
</div>

<!-- Nro Orden Compra Field -->
<div class="form-group">
    {!! Form::label('nro_orden_compra', 'Nro Orden Compra:') !!}
    <p>{!! $purchaseOrder->nro_orden_compra !!}</p>
</div>

<!-- Observacion Field -->
<div class="form-group">
    {!! Form::label('observacion', 'Observacion:') !!}
    <p>{!! $purchaseOrder->observacion !!}</p>
</div>

<!-- Id Sucursal Field -->
<div class="form-group">
    {!! Form::label('id_sucursal', 'Id Sucursal:') !!}
    <p>{!! $purchaseOrder->id_sucursal !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $purchaseOrder->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $purchaseOrder->updated_at !!}</p>
</div>

