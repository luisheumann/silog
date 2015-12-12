@extends('app')

@section('content')

    <div class="container">

        @include('flash::message')

        <div class="row">
            <h1 class="pull-left">RuleSales</h1>
            <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('ruleSales.create') !!}">Add New</a>
        </div>

        <div class="row">
            @if($ruleSales->isEmpty())
                <div class="well text-center">No RuleSales found.</div>
            @else
                @include('ruleSales.table')
            @endif
        </div>

        @include('common.paginate', ['records' => $ruleSales])


    </div>
@endsection