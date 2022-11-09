<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombrejuz', 'Nombre:') !!}
    {!! Form::text('nombrejuz', null, ['class' => 'form-control','required']) !!}
</div>

<!-- Juez Field -->
<div class="form-group col-sm-6">
    {!! Form::label('juez', 'Juez:') !!}
    {!! Form::text('juez', null, ['class' => 'form-control','required']) !!}
</div>

<!-- Secretario Field -->
<div class="form-group col-sm-6">
    {!! Form::label('secretario', 'Secretario:') !!}
    {!! Form::text('secretario', null, ['class' => 'form-control','required']) !!}
</div>
<!-- ujier Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ujier', 'Ujier:') !!}
    {!! Form::text('ujier', null, ['class' => 'form-control','required']) !!}
</div>
<!-- ujier Field -->
<div class="form-group col-sm-6">
    {!! Form::label('telefono', 'Telefono:') !!}
    {!! Form::number('telefono', null, ['class' => 'form-control','required']) !!}
</div>
<!-- Id Juzgado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_circunscripcion[]', 'Circunscripcion:') !!}
    {!! Form::select('id_circunscripcion', $circunscripcions, null, ['class' => 'form-control custom-select','id' => 'id_circunscripcion','placeholder'=>'Seleccione','required']) !!}
</div>