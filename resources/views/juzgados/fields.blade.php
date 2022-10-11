<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>

<!-- Juez Field -->
<div class="form-group col-sm-6">
    {!! Form::label('juez', 'Juez:') !!}
    {!! Form::text('juez', null, ['class' => 'form-control']) !!}
</div>

<!-- Secretario Field -->
<div class="form-group col-sm-6">
    {!! Form::label('secretario', 'Secretario:') !!}
    {!! Form::text('secretario', null, ['class' => 'form-control']) !!}
</div>
<!-- Id Juzgado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_circunscripcion[]', 'Circunscripcion:') !!}
    {!! Form::select('id_circunscripcion', $circunscripcions, null, ['class' => 'form-control custom-select']) !!}
</div>