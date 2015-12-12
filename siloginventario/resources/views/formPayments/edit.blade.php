@extends('app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::model($formPayment, ['route' => ['formPayments.update', $formPayment->id], 'method' => 'patch']) !!}

        @include('formPayments.fields')

    {!! Form::close() !!}
</div>
@endsection
