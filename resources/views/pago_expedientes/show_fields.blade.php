<!-- Concepto Field -->
<div class="col-sm-12">
    {!! Form::label('concepto', 'Concepto:') !!}
    <p>{{ $pagoExpediente->concepto }}</p>
</div>

<!-- Monto Field -->
<div class="col-sm-12">
    {!! Form::label('monto', 'Monto:') !!}
    <p>{{ $pagoExpediente->monto }}</p>
</div>

<!-- Fecha Field -->
<div class="col-sm-12">
    {!! Form::label('fecha', 'Fecha:') !!}
    <p>{{ $pagoExpediente->fecha }}</p>
</div>

<!-- Expediente Id Field -->
<div class="col-sm-12">
    {!! Form::label('expediente_id', 'Expediente Id:') !!}
    <p>{{ $pagoExpediente->expediente_id }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $pagoExpediente->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $pagoExpediente->updated_at }}</p>
</div>

