@extends('app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::open(['route' => 'productDetails.store']) !!}

        @include('productDetails.fields')

    {!! Form::close() !!}
</div>
@endsection
