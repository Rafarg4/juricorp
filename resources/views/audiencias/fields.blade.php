<!-- Expediente Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('expediente_id', 'Expediente Id:') !!}
    {!! Form::select('expediente_id', ], null, ['class' => 'form-control custom-select']) !!}
</div>


<!-- Inicio Audiencia Field -->
<div class="form-group col-sm-6">
    {!! Form::label('inicio_audiencia', 'Inicio Audiencia:') !!}
    {!! Form::text('inicio_audiencia', null, ['class' => 'form-control']) !!}
</div>

<!-- Find Audiencia Field -->
<div class="form-group col-sm-6">
    {!! Form::label('find_audiencia', 'Find Audiencia:') !!}
    {!! Form::text('find_audiencia', null, ['class' => 'form-control']) !!}
</div>

<!-- Descripcion Audiencia Field -->
<div class="form-group col-sm-6">
    {!! Form::label('descripcion_audiencia', 'Descripcion Audiencia:') !!}
    {!! Form::text('descripcion_audiencia', null, ['class' => 'form-control']) !!}
</div>