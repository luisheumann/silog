@extends('app')

@section('content')

    <div class="container">

        @include('flash::message')

        <div class="row">
            <h1 class="pull-left">PurchaseOrderDetails</h1>
            <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('purchaseOrderDetails.create') !!}">Add New</a>
        </div>

        <div class="row">
            @if($purchaseOrderDetails->isEmpty())
                <div class="well text-center">No PurchaseOrderDetails found.</div>
            @else
                @include('purchaseOrderDetails.table')
            @endif
        </div>

        @include('common.paginate', ['records' => $purchaseOrderDetails])


    </div>
@endsection