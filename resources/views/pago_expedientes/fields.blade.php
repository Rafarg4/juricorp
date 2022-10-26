<!-- Concepto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('concepto', 'Concepto:') !!}
    {!! Form::text('concepto', null, ['class' => 'form-control']) !!}
</div>

<!-- Monto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('monto', 'Monto:') !!}
    {!! Form::number('monto', null, ['class' => 'form-control']) !!}
</div>

<!-- Fecha Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha', 'Fecha:') !!}
    {!! Form::date('fecha', null, ['class' => 'form-control','id'=>'fecha']) !!}
</div>

<!-- Fecha Field -->
<div class="form-group col-sm-6">
    {!! Form::label('archivo', 'Archivo:') !!}
    {!! Form::file('archivo', null, ['class' => 'form-control','id'=>'archivo']) !!}
</div>
<div class="form-group col-sm-6">
    {!! Form::label('Nro Expediente', 'Nro Expediente:') !!}
    {!! Form::text('id_expediente',  $expediente->numero, ['class' => 'form-control','disabled']) !!}
</div>
<div class="col-sm-12">
    {!! Form::hidden('id_expediente',  $expediente->id, ['class' => 'form-control','id'=>'id_expediente']) !!}
</div>
