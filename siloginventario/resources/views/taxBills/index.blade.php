@extends('app')

@section('content')

    <div class="container">

        @include('flash::message')

        <div class="row">
            <h1 class="pull-left">TaxBills</h1>
            <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('taxBills.create') !!}">Add New</a>
        </div>

        <div class="row">
            @if($taxBills->isEmpty())
                <div class="well text-center">No TaxBills found.</div>
            @else
                @include('taxBills.table')
            @endif
        </div>

        @include('common.paginate', ['records' => $taxBills])


    </div>
@endsection