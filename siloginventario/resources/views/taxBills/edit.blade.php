@extends('app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::model($taxBill, ['route' => ['taxBills.update', $taxBill->id], 'method' => 'patch']) !!}

        @include('taxBills.fields')

    {!! Form::close() !!}
</div>
@endsection
