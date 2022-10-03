<!-- Numero Field -->
<div class="col-sm-12">
    {!! Form::label('numero', 'Numero:') !!}
    <p>{{ $expediente->numero }}</p>
</div>

<!-- Anho Field -->
<div class="col-sm-12">
    {!! Form::label('anho', 'Anho:') !!}
    <p>{{ $expediente->anho }}</p>
</div>

<!-- Caratula Field -->
<div class="col-sm-12">
    {!! Form::label('caratula', 'Caratula:') !!}
    <p>{{ $expediente->caratula }}</p>
</div>

<!-- Id Circunscripcion Field -->
<div class="col-sm-12">
    {!! Form::label('id_circunscripcion', 'Circunscripcion:') !!}
    <p>{{ $expediente->circunscripcion->nombre }}</p>
</div>

<!-- Id Juzgado Field -->
<div class="col-sm-12">
    {!! Form::label('id_juzgado', 'Juzgado:') !!}
    <p>{{ $expediente->juzgado->nombre }}</p>
</div>
<div class="col-sm-12">
    {!! Form::label('clientes', 'Cliente:') !!}
    <p>@foreach($expediente->clientes as $expediente)
            {{ $expediente->nombre}}
            @endforeach</p>
</div>
<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $expediente->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $expediente->updated_at }}</p>
</div>

