@extends('app')

@section('content')

    <div class="container">

        @include('flash::message')

        <div class="row">
            <h1 class="pull-left">Kardexes</h1>
            <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('kardexes.create') !!}">Add New</a>
        </div>

        <div class="row">
            @if($kardexes->isEmpty())
                <div class="well text-center">No Kardexes found.</div>
            @else
                @include('kardexes.table')
            @endif
        </div>

        @include('common.paginate', ['records' => $kardexes])


    </div>
@endsection