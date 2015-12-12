@extends('app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::open(['route' => 'ruleSales.store']) !!}

        @include('ruleSales.fields')

    {!! Form::close() !!}
</div>
@endsection
