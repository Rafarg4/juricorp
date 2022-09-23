<!-- Concepto Field -->
<div class="col-sm-12">
    {!! Form::label('concepto', 'Concepto:') !!}
    <p>{{ $gastoExpediente->concepto }}</p>
</div>

<!-- Monto Field -->
<div class="col-sm-12">
    {!! Form::label('monto', 'Monto:') !!}
    <p>{{ $gastoExpediente->monto }}</p>
</div>

<!-- Fecha Field -->
<div class="col-sm-12">
    {!! Form::label('fecha', 'Fecha:') !!}
    <p>{{ $gastoExpediente->fecha }}</p>
</div>

<!-- Id Expediente Field -->
<div class="col-sm-12">
    {!! Form::label('id_expediente', 'Id Expediente:') !!}
    <p>{{ $gastoExpediente->id_expediente }}</p>
</div>

<!-- Archivo Field -->
<div class="col-sm-12">
    {!! Form::label('archivo', 'Archivo:') !!}
    <p>{{ $gastoExpediente->archivo }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $gastoExpediente->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $gastoExpediente->updated_at }}</p>
</div>

