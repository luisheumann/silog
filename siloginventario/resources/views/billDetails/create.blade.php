@extends('app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::open(['route' => 'billDetails.store']) !!}

        @include('billDetails.fields')

    {!! Form::close() !!}
</div>
@endsection
