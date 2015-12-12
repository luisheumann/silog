@extends('app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::open(['route' => 'locations.store']) !!}

        @include('locations.fields')

    {!! Form::close() !!}
</div>
@endsection
