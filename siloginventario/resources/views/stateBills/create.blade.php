@extends('app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::open(['route' => 'stateBills.store']) !!}

        @include('stateBills.fields')

    {!! Form::close() !!}
</div>
@endsection
