<div class="form-group col-sm-6">
    {!! Form::label('Nro Expediente', 'Nro Expediente:') !!}
    {!! Form::text('id_expediente',  $expediente->numero,['class' => 'form-control','disabled']) !!}
</div>
<!-- Fecha Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha', 'Fecha:') !!}
    {!! Form::date('fecha', null, ['class' => 'form-control','required']) !!}
</div>

<!-- Curso Actividad Expediente Field -->
<div class="form-group col-sm-6">
    {!! Form::label('curso_actividad_expediente', 'Curso de Expediente:') !!}
    {!! Form::text('curso_actividad_expediente', null, ['class' => 'form-control','required']) !!}
</div>

<!-- Escrito Field -->
<div class="form-group col-sm-6">
              {!! Form::label('escrito', 'Escrito:') !!}
            <div class="input-group">
            <div class="custom-file">
            {!! Form::file('escrito', null, ['class' => 'form-control', 'id' => 'escrito','required']) !!}
            <label class="custom-file-label" for="escrito">Seleccionar Archivo</label>
            </div>
            </div>
             @if(isset($seguimiento->escrito))
            <img src="/pdf.jpg" width="40" height="40"></a>
            @endif
            </div>

<!-- Proximo Paso Field -->
<div class="form-group col-sm-6">
    {!! Form::label('proximo_paso', 'Proximo Paso:') !!}
    {!! Form::text('proximo_paso', null, ['class' => 'form-control','required']) !!}
</div>
<!-- Preparado Por Field -->
<div class="form-group col-sm-6">
                <label for="preparado_por">Preparado por:</label>
                <input type="text" name="preparado_por" class="form-control" value="{{ Auth::user()->name }}" readonly>
                </div>

<!-- Controlado Por Field -->
<div class="form-group col-sm-6">
    {!! Form::label('controlado_por', 'Controlado Por:') !!}
    {!! Form::text('controlado_por', null, ['class' => 'form-control','required']) !!}
</div>
<div class="form-group col-sm-6">
    {!! Form::label('supervision', 'Supervidaso por:') !!}
    {!! Form::text('supervision', null, ['class' => 'form-control','required']) !!}
</div>
<div class="col-sm-12">
    {!! Form::hidden('id_expediente',  $expediente->id, ['class' => 'form-control','id'=>'id_expediente','required']) !!}
</div>