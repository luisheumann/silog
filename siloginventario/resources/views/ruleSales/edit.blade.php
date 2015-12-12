@extends('app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::model($ruleSale, ['route' => ['ruleSales.update', $ruleSale->id], 'method' => 'patch']) !!}

        @include('ruleSales.fields')

    {!! Form::close() !!}
</div>
@endsection
