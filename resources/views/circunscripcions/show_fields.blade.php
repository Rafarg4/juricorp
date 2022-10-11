<!-- Nombre Field -->
<div class="col-sm-12">
    {!! Form::label('nombre', 'Nombre:') !!}
    <p>{{ $circunscripcion->nombre }}</p>
</div>

<!-- Departamento Field -->
<div class="col-sm-12">
    {!! Form::label('departamento', 'Departamento:') !!}
    <p>{{ $circunscripcion->departamento }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Creado:') !!}
    <p>{{ $circunscripcion->created_at }}</p>
</div>

