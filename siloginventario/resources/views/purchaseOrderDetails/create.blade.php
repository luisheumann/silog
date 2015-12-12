@extends('app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::open(['route' => 'purchaseOrderDetails.store']) !!}

        @include('purchaseOrderDetails.fields')

    {!! Form::close() !!}
</div>
@endsection
