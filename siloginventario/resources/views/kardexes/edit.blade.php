@extends('app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::model($kardex, ['route' => ['kardexes.update', $kardex->id], 'method' => 'patch']) !!}

        @include('kardexes.fields')

    {!! Form::close() !!}
</div>
@endsection
