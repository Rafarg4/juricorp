
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>

<!-- (Optional) Latest compiled and minified JavaScript translation files -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/i18n/defaults-*.min.js"></script>
<!-- Numero Field -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
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
<!-- Archivo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('archivo', 'Archivo:') !!}
    {!! Form::text('archivo', null, ['class' => 'form-control']) !!}
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