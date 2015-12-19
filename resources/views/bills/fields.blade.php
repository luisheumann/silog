<!-- Id Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('id', 'Id:') !!}
	{!! Form::number('id', null, ['class' => 'form-control']) !!}
</div>

<!-- Forms Payments Id Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('forms_payments_id', 'Forms Payments Id:') !!}
	{!! Form::number('forms_payments_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Proveedor Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('id_proveedor', 'Id Proveedor:') !!}
	{!! Form::number('id_proveedor', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Persona Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('id_persona', 'Id Persona:') !!}
	{!! Form::number('id_persona', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Vehiculo Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('id_vehiculo', 'Id Vehiculo:') !!}
	{!! Form::number('id_vehiculo', null, ['class' => 'form-control']) !!}
</div>

<!-- Fecha Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('fecha', 'Fecha:') !!}
	{!! Form::date('fecha', null, ['class' => 'form-control']) !!}
</div>

<!-- Numero Factura Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('numero_factura', 'Numero Factura:') !!}
	{!! Form::number('numero_factura', null, ['class' => 'form-control']) !!}
</div>

<!-- Valor Total Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('valor_total', 'Valor Total:') !!}
	{!! Form::number('valor_total', null, ['class' => 'form-control']) !!}
</div>

<!-- Valor Impuesto Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('valor_impuesto', 'Valor Impuesto:') !!}
	{!! Form::number('valor_impuesto', null, ['class' => 'form-control']) !!}
</div>

<!-- Valor Factura Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('valor_factura', 'Valor Factura:') !!}
	{!! Form::number('valor_factura', null, ['class' => 'form-control']) !!}
</div>

<!-- Valor Abono Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('valor_abono', 'Valor Abono:') !!}
	{!! Form::number('valor_abono', null, ['class' => 'form-control']) !!}
</div>

<!-- Saldo Actual Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('saldo_actual', 'Saldo Actual:') !!}
	{!! Form::number('saldo_actual', null, ['class' => 'form-control']) !!}
</div>

<!-- State Bill Id Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('state_bill_id', 'State Bill Id:') !!}
	{!! Form::number('state_bill_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Fecha Cobro Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('fecha_cobro', 'Fecha Cobro:') !!}
	{!! Form::date('fecha_cobro', null, ['class' => 'form-control']) !!}
</div>

<!-- Observacion Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('observacion', 'Observacion:') !!}
	{!! Form::textarea('observacion', null, ['class' => 'form-control']) !!}
</div>

<!-- Resolucion Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('resolucion', 'Resolucion:') !!}
	{!! Form::number('resolucion', null, ['class' => 'form-control']) !!}
</div>

<!-- Tax Bill Id Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('tax_bill_id', 'Tax Bill Id:') !!}
	{!! Form::number('tax_bill_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Valor Descuento Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('valor_descuento', 'Valor Descuento:') !!}
	{!! Form::number('valor_descuento', null, ['class' => 'form-control']) !!}
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
