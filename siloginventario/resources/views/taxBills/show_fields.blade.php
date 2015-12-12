<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $taxBill->id !!}</p>
</div>

<!-- Bill Id Field -->
<div class="form-group">
    {!! Form::label('bill_id', 'Bill Id:') !!}
    <p>{!! $taxBill->bill_id !!}</p>
</div>

<!-- Tax Id Field -->
<div class="form-group">
    {!! Form::label('tax_id', 'Tax Id:') !!}
    <p>{!! $taxBill->tax_id !!}</p>
</div>

<!-- Porcentaje Field -->
<div class="form-group">
    {!! Form::label('porcentaje', 'Porcentaje:') !!}
    <p>{!! $taxBill->porcentaje !!}</p>
</div>

<!-- Valor Base Field -->
<div class="form-group">
    {!! Form::label('valor_base', 'Valor Base:') !!}
    <p>{!! $taxBill->valor_base !!}</p>
</div>

<!-- Total Field -->
<div class="form-group">
    {!! Form::label('total', 'Total:') !!}
    <p>{!! $taxBill->total !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $taxBill->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $taxBill->updated_at !!}</p>
</div>

