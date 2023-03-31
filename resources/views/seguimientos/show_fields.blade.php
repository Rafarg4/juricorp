<!-- Fecha Field -->
<div class="col-sm-12">
    {!! Form::label('fecha', 'Fecha:') !!}
    <p>{{ $seguimiento->fecha }}</p>
</div>

<!-- Curso Actividad Expediente Field -->
<div class="col-sm-12">
    {!! Form::label('curso_actividad_expediente', 'Curso Actividad Expediente:') !!}
    <p>{{ $seguimiento->curso_actividad_expediente }}</p>
</div>

<!-- Escrito Field -->
<div class="col-sm-12">
    {!! Form::label('escrito', 'Escrito:') !!}
    <p>{{ $seguimiento->escrito }}</p>
</div>

<!-- Proximo Paso Field -->
<div class="col-sm-12">
    {!! Form::label('proximo_paso', 'Proximo Paso:') !!}
    <p>{{ $seguimiento->proximo_paso }}</p>
</div>

<!-- Escrito Actualizado Field -->
<div class="col-sm-12">
    {!! Form::label('escrito_actualizado', 'Escrito Actualizado:') !!}
    <p>{{ $seguimiento->escrito_actualizado }}</p>
</div>

<!-- Preparado Por Field -->
<div class="col-sm-12">
    {!! Form::label('preparado_por', 'Preparado Por:') !!}
    <p>{{ $seguimiento->preparado_por }}</p>
</div>

<!-- Controlado Por Field -->
<div class="col-sm-12">
    {!! Form::label('controlado_por', 'Controlado Por:') !!}
    <p>{{ $seguimiento->controlado_por }}</p>
</div>

<!-- Supervision Text Field -->
<div class="col-sm-12">
    {!! Form::label('supervision_text', 'Supervision Text:') !!}
    <p>{{ $seguimiento->supervision_text }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $seguimiento->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $seguimiento->updated_at }}</p>
</div>

