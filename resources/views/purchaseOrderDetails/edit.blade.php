@extends('app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::model($purchaseOrderDetail, ['route' => ['purchaseOrderDetails.update', $purchaseOrderDetail->id], 'method' => 'patch']) !!}

        @include('purchaseOrderDetails.fields')

    {!! Form::close() !!}
</div>
@endsection
