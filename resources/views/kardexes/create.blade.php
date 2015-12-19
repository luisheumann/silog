@extends('app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::open(['route' => 'kardexes.store']) !!}

        @include('kardexes.fields')

    {!! Form::close() !!}
</div>
@endsection
