<!-- Id Cliente Field -->
<div class="col-sm-12">
    {!! Form::label('id_cliente', 'Id Cliente:') !!}
    <p>{{ $expedienteDetalle->id_cliente }}</p>
</div>

<!-- Id Expediente Field -->
<div class="col-sm-12">
    {!! Form::label('id_expediente', 'Id Expediente:') !!}
    <p>{{ $expedienteDetalle->id_expediente }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $expedienteDetalle->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $expedienteDetalle->updated_at }}</p>
</div>

