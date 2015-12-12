@extends('app')

@section('content')

    <div class="container">

        @include('flash::message')

        <div class="row">
            <h1 class="pull-left">FormPayments</h1>
            <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('formPayments.create') !!}">Add New</a>
        </div>

        <div class="row">
            @if($formPayments->isEmpty())
                <div class="well text-center">No FormPayments found.</div>
            @else
                @include('formPayments.table')
            @endif
        </div>

        @include('common.paginate', ['records' => $formPayments])


    </div>
@endsection