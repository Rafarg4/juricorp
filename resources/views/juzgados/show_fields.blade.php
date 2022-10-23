<!-- Nombre Field -->
<div class="col-sm-6">
    {!! Form::label('nombre', 'Nombre:') !!}
    <p>{{ $juzgado->nombrejuz }}</p>
</div>

<!-- Juez Field -->
<div class="col-sm-6">
    {!! Form::label('juez', 'Juez:') !!}
    <p>{{ $juzgado->juez }}</p>
</div>

<!-- Secretario Field -->
<div class="col-sm-6">
    {!! Form::label('secretario', 'Secretario:') !!}
    <p>{{ $juzgado->secretario }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-6">
    {!! Form::label('created_at', 'Creado:') !!}
    <p>{{ $juzgado->created_at }}</p>
</div>

