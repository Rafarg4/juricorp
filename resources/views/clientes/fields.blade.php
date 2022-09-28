<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>

<!-- Apellido Field -->
<div class="form-group col-sm-6">
    {!! Form::label('apellido', 'Apellido:') !!}
    {!! Form::text('apellido', null, ['class' => 'form-control']) !!}
</div>

<!-- Ci Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ci', 'Ci:') !!}
    {!! Form::number('ci', null, ['class' => 'form-control']) !!}
</div>

<!-- Fecha Nacimiento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha_nacimiento', 'Fecha Nacimiento:') !!}
    {!! Form::text('fecha_nacimiento', null, ['class' => 'form-control','id'=>'fecha_nacimiento']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#fecha_nacimiento').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Nacionalidad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nacionalidad', 'Nacionalidad:') !!}
    {!! Form::text('nacionalidad', null, ['class' => 'form-control']) !!}
</div>

<!-- Distrito Origen Field -->
<div class="form-group col-sm-6">
    {!! Form::label('distrito_origen', 'Distrito Origen:') !!}
    {!! Form::text('distrito_origen', null, ['class' => 'form-control']) !!}
</div>

<!-- Domicilio Particular Field -->
<div class="form-group col-sm-6">
    {!! Form::label('domicilio_particular', 'Domicilio Particular:') !!}
    {!! Form::text('domicilio_particular', null, ['class' => 'form-control']) !!}
</div>

<!-- Numero Casa Field -->
<div class="form-group col-sm-6">
    {!! Form::label('numero_casa', 'Numero Casa:') !!}
    {!! Form::text('numero_casa', null, ['class' => 'form-control']) !!}
</div>

<!-- Barrio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('barrio', 'Barrio:') !!}
    {!! Form::text('barrio', null, ['class' => 'form-control']) !!}
</div>

<!-- Ciudad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ciudad', 'Ciudad:') !!}
    {!! Form::text('ciudad', null, ['class' => 'form-control']) !!}
</div>

<!-- Numero Telefono Field -->
<div class="form-group col-sm-6">
    {!! Form::label('numero_telefono', 'Numero Telefono:') !!}
    {!! Form::number('numero_telefono', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::text('email', null, ['class' => 'form-control']) !!}
</div>

<!-- Rede Social Field -->
<div class="form-group col-sm-6">
    {!! Form::label('rede_social', 'Rede Social:') !!}
    {!! Form::text('rede_social', null, ['class' => 'form-control']) !!}
</div>

<!-- Nombre Apellido Coyuge Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre_apellido_coyuge', 'Nombre Apellido Coyuge:') !!}
    {!! Form::text('nombre_apellido_coyuge', null, ['class' => 'form-control']) !!}
</div>

<!-- Ci Coyuge Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ci_coyuge', 'Ci Coyuge:') !!}
    {!! Form::number('ci_coyuge', null, ['class' => 'form-control']) !!}
</div>

<!-- Empresa Otro Field -->
<div class="form-group col-sm-6">
    {!! Form::label('empresa_otro', 'Empresa Otro:') !!}
    {!! Form::text('empresa_otro', null, ['class' => 'form-control']) !!}
</div>

<!-- Direccion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('direccion', 'Direccion:') !!}
    {!! Form::text('direccion', null, ['class' => 'form-control']) !!}
</div>

<!-- Numero Casa Field -->
<div class="form-group col-sm-6">
    {!! Form::label('numero_casa_laboral', 'Numero Casa:') !!}
    {!! Form::text('numero_casa_laboral', null, ['class' => 'form-control']) !!}
</div>

<!-- Telefono Fijo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('telefono_fijo', 'Telefono Fijo:') !!}
    {!! Form::number('telefono_fijo', null, ['class' => 'form-control']) !!}
</div>

<!-- Telefono Laboral Field -->
<div class="form-group col-sm-6">
    {!! Form::label('telefono_laboral', 'Telefono Laboral:') !!}
    {!! Form::number('telefono_laboral', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Laboral Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email_laboral', 'Email Laboral:') !!}
    {!! Form::text('email_laboral', null, ['class' => 'form-control']) !!}
</div>
