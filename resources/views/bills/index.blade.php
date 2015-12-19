@extends('app')

@section('content')

    <div class="container">

        @include('flash::message')

        <div class="row">
            <h1 class="pull-left">Bills</h1>
            <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('bills.create') !!}">Add New</a>
        </div>

        <div class="row">
            @if($bills->isEmpty())
                <div class="well text-center">No Bills found.</div>
            @else
                @include('bills.table')
            @endif
        </div>

        @include('common.paginate', ['records' => $bills])


    </div>
@endsection