@extends('app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::open(['route' => 'locationProducts.store']) !!}

        @include('locationProducts.fields')

    {!! Form::close() !!}
</div>
@endsection
