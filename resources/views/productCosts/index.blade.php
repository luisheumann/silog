@extends('app')

@section('content')

    <div class="container">

        @include('flash::message')

        <div class="row">
            <h1 class="pull-left">ProductCosts</h1>
            <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('productCosts.create') !!}">Add New</a>
        </div>

        <div class="row">
            @if($productCosts->isEmpty())
                <div class="well text-center">No ProductCosts found.</div>
            @else
                @include('productCosts.table')
            @endif
        </div>

        @include('common.paginate', ['records' => $productCosts])


    </div>
@endsection