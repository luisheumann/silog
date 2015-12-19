@extends('app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::model($locationProduct, ['route' => ['locationProducts.update', $locationProduct->id], 'method' => 'patch']) !!}

        @include('locationProducts.fields')

    {!! Form::close() !!}
</div>
@endsection
