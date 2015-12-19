@extends('app')

@section('content')
 {!! Toastr::render() !!}
<div class="container">

    @include('common.errors')
    
    {!! Form::open(['route' => 'categories.store']) !!}

        @include('categories.fields')

    {!! Form::close() !!}
</div>
@endsection
