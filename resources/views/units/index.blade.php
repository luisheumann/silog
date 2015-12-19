@extends('app')

@section('content')

    <div class="container">

        @include('flash::message')

        <div class="row">
            <h1 class="pull-left">Units</h1>
            <a data-toggle="modal" data-target="#myModal" class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('units.create') !!}">Add New</a>
        </div>

        <div class="row">
            @if($units->isEmpty())
                <div class="well text-center">No Units found.</div>
            @else
                @include('units.table')
            @endif
        </div>

        @include('common.paginate', ['records' => $units])


    </div>
@endsection