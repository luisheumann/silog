@extends('app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::model($location, ['route' => ['locations.update', $location->id], 'method' => 'patch']) !!}

        @include('locations.fields')

    {!! Form::close() !!}
</div>
@endsection
