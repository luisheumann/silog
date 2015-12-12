@extends('app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::open(['route' => 'formPayments.store']) !!}

        @include('formPayments.fields')

    {!! Form::close() !!}
</div>
@endsection
