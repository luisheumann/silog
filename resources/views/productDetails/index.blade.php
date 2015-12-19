@extends('app')

@section('content')

    <div class="container">

        @include('flash::message')

        <div class="row">
            <h1 class="pull-left">ProductDetails</h1>
            <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('productDetails.create') !!}">Add New</a>
        </div>

        <div class="row">
            @if($productDetails->isEmpty())
                <div class="well text-center">No ProductDetails found.</div>
            @else
                @include('productDetails.table')
            @endif
        </div>

        @include('common.paginate', ['records' => $productDetails])


    </div>
@endsection