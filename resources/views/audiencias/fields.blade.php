<!-- Expediente Id Field -->



<!-- Inicio Audiencia Field -->
<div class="form-group col-sm-12">
    {!! Form::label('inicio_audiencia', 'Inicio Audiencia:') !!}
    {!! Form::date('inicio_audiencia', null, ['class' => 'form-control','required']) !!}
</div>

<!-- Find Audiencia Field -->


<!-- Descripcion Audiencia Field -->
<div class="form-group col-sm-12">
    {!! Form::label('descripcion_audiencia', 'Descripcion Audiencia:') !!}
    {!! Form::text('descripcion_audiencia', null, ['class' => 'form-control','required']) !!}
</div>