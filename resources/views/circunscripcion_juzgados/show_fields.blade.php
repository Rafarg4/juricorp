<!-- Id Juzgado Field -->
<div class="col-sm-12">
    {!! Form::label('id_juzgado', 'Id Juzgado:') !!}
    <p>{{ $circunscripcionJuzgado->id_juzgado }}</p>
</div>

<!-- Id Circunscripcion Field -->
<div class="col-sm-12">
    {!! Form::label('id_circunscripcion', 'Id Circunscripcion:') !!}
    <p>{{ $circunscripcionJuzgado->id_circunscripcion }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $circunscripcionJuzgado->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $circunscripcionJuzgado->updated_at }}</p>
</div>

