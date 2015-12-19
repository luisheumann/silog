@extends('app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::open(['route' => 'productCosts.store']) !!}

        @include('productCosts.fields')

    {!! Form::close() !!}
</div>
@endsection
