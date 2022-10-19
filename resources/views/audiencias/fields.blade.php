<!-- Expediente Id Field -->



<!-- Inicio Audiencia Field -->
<div class="form-group col-sm-12">
    {!! Form::label('inicio_audiencia', 'Inicio Audiencia:') !!}
    {!! Form::date('inicio_audiencia', null, ['class' => 'form-control']) !!}
</div>

<!-- Find Audiencia Field -->
<div class="form-group col-sm-12">
    {!! Form::label('fin_audiencia', 'Fin Audiencia:') !!}
    {!! Form::date('fin_audiencia', null, ['class' => 'form-control']) !!}
</div>

<!-- Descripcion Audiencia Field -->
<div class="form-group col-sm-12">
    {!! Form::label('descripcion_audiencia', 'Descripcion Audiencia:') !!}
    {!! Form::text('descripcion_audiencia', null, ['class' => 'form-control']) !!}
</div>