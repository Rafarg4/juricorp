<!-- Nombre Field -->
<div class="col-sm-12">
    {!! Form::label('nombre', 'Nombre:') !!}
    <p>{{ $juzgado->nombre }}</p>
</div>

<!-- Juez Field -->
<div class="col-sm-12">
    {!! Form::label('juez', 'Juez:') !!}
    <p>{{ $juzgado->juez }}</p>
</div>

<!-- Secretario Field -->
<div class="col-sm-12">
    {!! Form::label('secretario', 'Secretario:') !!}
    <p>{{ $juzgado->secretario }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $juzgado->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $juzgado->updated_at }}</p>
</div>

