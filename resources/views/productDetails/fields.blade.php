<!-- Id Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('id', 'Id:') !!}
	{!! Form::number('id', null, ['class' => 'form-control']) !!}
</div>

<!-- Cod Product Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('cod_product', 'Cod Product:') !!}
	{!! Form::text('cod_product', null, ['class' => 'form-control']) !!}
</div>

<!-- Product Brand Id Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('product_brand_id', 'Product Brand Id:') !!}
	{!! Form::number('product_brand_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Descripcion Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('descripcion', 'Descripcion:') !!}
	{!! Form::textarea('descripcion', null, ['class' => 'form-control']) !!}
</div>

<!-- Product Id Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('product_id', 'Product Id:') !!}
	{!! Form::number('product_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Rule Sale Id Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('rule_sale_id', 'Rule Sale Id:') !!}
	{!! Form::number('rule_sale_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Precio Compra Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('precio_compra', 'Precio Compra:') !!}
	{!! Form::number('precio_compra', null, ['class' => 'form-control']) !!}
</div>

<!-- Precio Venta Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('precio_venta', 'Precio Venta:') !!}
	{!! Form::number('precio_venta', null, ['class' => 'form-control']) !!}
</div>

<!-- Precio Promocion Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('precio_promocion', 'Precio Promocion:') !!}
	{!! Form::number('precio_promocion', null, ['class' => 'form-control']) !!}
</div>

<!-- Cantidad Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('cantidad', 'Cantidad:') !!}
	{!! Form::number('cantidad', null, ['class' => 'form-control']) !!}
</div>

<!-- Imagen Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('imagen', 'Imagen:') !!}
	{!! Form::text('imagen', null, ['class' => 'form-control']) !!}
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
