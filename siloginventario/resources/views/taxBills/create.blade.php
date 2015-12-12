@extends('app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::open(['route' => 'taxBills.store']) !!}

        @include('taxBills.fields')

    {!! Form::close() !!}
</div>
@endsection
