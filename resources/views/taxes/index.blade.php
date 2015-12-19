@extends('app')

@section('content')

    <div class="container">

        @include('flash::message')

        <div class="row">
            <h1 class="pull-left">Taxes</h1>
            <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('taxes.create') !!}">Add New</a>
        </div>

        <div class="row">
            @if($taxes->isEmpty())
                <div class="well text-center">No Taxes found.</div>
            @else
                @include('taxes.table')
            @endif
        </div>

        @include('common.paginate', ['records' => $taxes])


    </div>
@endsection