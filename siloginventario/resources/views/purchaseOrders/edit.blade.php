@extends('app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::model($purchaseOrder, ['route' => ['purchaseOrders.update', $purchaseOrder->id], 'method' => 'patch']) !!}

        @include('purchaseOrders.fields')

    {!! Form::close() !!}
</div>
@endsection
