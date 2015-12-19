@extends('app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::model($billDetail, ['route' => ['billDetails.update', $billDetail->id], 'method' => 'patch']) !!}

        @include('billDetails.fields')

    {!! Form::close() !!}
</div>
@endsection
