@extends('app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::open(['route' => 'purchaseOrders.store']) !!}

        @include('purchaseOrders.fields')

    {!! Form::close() !!}
</div>
@endsection
