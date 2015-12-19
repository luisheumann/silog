@extends('app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::model($productDetail, ['route' => ['productDetails.update', $productDetail->id], 'method' => 'patch']) !!}

        @include('productDetails.fields')

    {!! Form::close() !!}
</div>
@endsection
