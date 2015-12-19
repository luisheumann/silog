
<div class="container">

    @include('common.errors')

    {!! Form::model($unit, ['route' => ['units.update', $unit->id], 'method' => 'patch']) !!}

        @include('units.fields')

    {!! Form::close() !!}
</div>

