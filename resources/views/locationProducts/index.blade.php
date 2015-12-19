@extends('app')

@section('content')

    <div class="container">

        @include('flash::message')

        <div class="row">
            <h1 class="pull-left">LocationProducts</h1>
            <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('locationProducts.create') !!}">Add New</a>
        </div>

        <div class="row">
            @if($locationProducts->isEmpty())
                <div class="well text-center">No LocationProducts found.</div>
            @else
                @include('locationProducts.table')
            @endif
        </div>

        @include('common.paginate', ['records' => $locationProducts])


    </div>
@endsection