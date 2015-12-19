@extends('app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::model($stateBill, ['route' => ['stateBills.update', $stateBill->id], 'method' => 'patch']) !!}

        @include('stateBills.fields')

    {!! Form::close() !!}
</div>
@endsection
