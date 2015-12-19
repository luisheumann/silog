@extends('app')

@section('content')

    <div class="container">

        @include('flash::message')

        <div class="row">
            <h1 class="pull-left">PurchaseOrders</h1>
            <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('purchaseOrders.create') !!}">Add New</a>
        </div>

        <div class="row">
            @if($purchaseOrders->isEmpty())
                <div class="well text-center">No PurchaseOrders found.</div>
            @else
                @include('purchaseOrders.table')
            @endif
        </div>

        @include('common.paginate', ['records' => $purchaseOrders])


    </div>
@endsection