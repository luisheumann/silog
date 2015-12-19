@extends('app')

@section('content')

    <div class="container">

        @include('flash::message')

        <div class="row">
            <h1 class="pull-left">StateBills</h1>
            <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('stateBills.create') !!}">Add New</a>
        </div>

        <div class="row">
            @if($stateBills->isEmpty())
                <div class="well text-center">No StateBills found.</div>
            @else
                @include('stateBills.table')
            @endif
        </div>

        @include('common.paginate', ['records' => $stateBills])


    </div>
@endsection