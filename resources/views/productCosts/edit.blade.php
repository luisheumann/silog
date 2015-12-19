@extends('app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::model($productCost, ['route' => ['productCosts.update', $productCost->id], 'method' => 'patch']) !!}

        @include('productCosts.fields')

    {!! Form::close() !!}
</div>
@endsection
