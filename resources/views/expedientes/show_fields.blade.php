<!-- Numero Field -->
<div class="col-sm-6">
    {!! Form::label('numero', 'Numero:') !!}
    <p>{{ $expediente->numero }}</p>
</div>

<!-- Anho Field -->
<div class="col-sm-6">
    {!! Form::label('anho', 'Año:') !!}
    <p>{{ $expediente->anho }}</p>
</div>

<!-- Caratula Field -->
<div class="col-sm-6">
    {!! Form::label('caratula', 'Caratula:') !!}
    <p>{{ $expediente->caratula }}</p>
</div>

<!-- Id Circunscripcion Field -->
<div class="col-sm-6">
    {!! Form::label('id_circunscripcion', 'Circunscripcion:') !!}
    <p>{{ $expediente->circunscripcion->nombre }}</p>
</div>

<!-- Id Juzgado Field -->
<div class="col-sm-6">
    {!! Form::label('id_juzgado', 'Juzgado:') !!}
    <p>{{ $expediente->juzgado->nombre }}</p>
</div>
<div class="col-sm-6 ">
    {!! Form::label('clientes', 'Clientes:', ['class'=>'lb-lg']) !!}
    <p>@foreach($expediente->clientes as $expediente)
            {{ $expediente->nombre}}
            @endforeach</p>
</div>
<!-- Created At Field -->
<div class="col-sm-6">
    {!! Form::label('created_at', 'Registrado en fecha:') !!}
    <p>{{ $expediente->created_at }}</p>
</div>

