@extends('app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::model($tax, ['route' => ['taxes.update', $tax->id], 'method' => 'patch']) !!}

        @include('taxes.fields')

    {!! Form::close() !!}
</div>
@endsection
