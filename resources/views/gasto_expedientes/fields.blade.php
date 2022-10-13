

<!-- Concepto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('concepto_gasto', 'Concepto:') !!}
    {!! Form::text('concepto_gasto', null, ['class' => 'form-control']) !!}
</div>

<!-- Monto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('monto_gasto', 'Monto:') !!}
    {!! Form::number('monto_gasto', null, ['class' => 'form-control']) !!}
</div>

<!-- Fecha Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha_gasto', 'Fecha:') !!}
    {!! Form::date('fecha_gasto', null, ['class' => 'form-control','id'=>'fecha_gasto']) !!}
</div>
<!-- Archivo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('archivo_gasto', 'Archivo:') !!}
    {!! Form::text('archivo_gasto', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('Nro Expediente', 'Nro Expediente:') !!}
    {!! Form::text('Nro_expediente',  $expediente->numero, ['class' => 'form-control','id'=>'numero', 'disabled']) !!}
</div>
<!-- Expediente Id Field -->
<div class="col-sm-12">
    {!! Form::hidden('id_expediente',  $expediente->id, ['class' => 'form-control','id'=>'id_expediente']) !!}
</div>
<!-- Concepto Field -->