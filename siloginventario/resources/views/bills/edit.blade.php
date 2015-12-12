@extends('app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::model($bill, ['route' => ['bills.update', $bill->id], 'method' => 'patch']) !!}

        @include('bills.fields')

    {!! Form::close() !!}
</div>
@endsection
