@extends('app')

@section('content')

    <div class="container">

        @include('flash::message')

        <div class="row">
            <h1 class="pull-left">BillDetails</h1>
            <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('billDetails.create') !!}">Add New</a>
        </div>

        <div class="row">
            @if($billDetails->isEmpty())
                <div class="well text-center">No BillDetails found.</div>
            @else
                @include('billDetails.table')
            @endif
        </div>

        @include('common.paginate', ['records' => $billDetails])


    </div>
@endsection