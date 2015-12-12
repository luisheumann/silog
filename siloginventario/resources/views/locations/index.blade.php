@extends('app')

@section('content')

    <div class="container">

        @include('flash::message')

        <div class="row">
            <h1 class="pull-left">Locations</h1>
            <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('locations.create') !!}">Add New</a>
        </div>

        <div class="row">
            @if($locations->isEmpty())
                <div class="well text-center">No Locations found.</div>
            @else
                @include('locations.table')
            @endif
        </div>

        @include('common.paginate', ['records' => $locations])


    </div>
@endsection