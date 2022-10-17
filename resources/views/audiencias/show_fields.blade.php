<!-- Expediente Id Field -->
<div class="col-sm-12">
    {!! Form::label('expediente_id', 'Expediente Id:') !!}
    <p>{{ $audiencias->expediente_id }}</p>
</div>

<!-- Inicio Audiencia Field -->
<div class="col-sm-12">
    {!! Form::label('inicio_audiencia', 'Inicio Audiencia:') !!}
    <p>{{ $audiencias->inicio_audiencia }}</p>
</div>

<!-- Find Audiencia Field -->
<div class="col-sm-12">
    {!! Form::label('find_audiencia', 'Find Audiencia:') !!}
    <p>{{ $audiencias->find_audiencia }}</p>
</div>

<!-- Descripcion Audiencia Field -->
<div class="col-sm-12">
    {!! Form::label('descripcion_audiencia', 'Descripcion Audiencia:') !!}
    <p>{{ $audiencias->descripcion_audiencia }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $audiencias->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $audiencias->updated_at }}</p>
</div>

