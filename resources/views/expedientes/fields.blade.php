
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>

<!-- (Optional) Latest compiled and minified JavaScript translation files -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/i18n/defaults-*.min.js"></script>
<!-- Numero Field -->

<div class="form-group col-sm-6">
    {!! Form::label('numero', 'Numero:') !!}
    {!! Form::number('numero', null, ['class' => 'form-control']) !!}
</div>

<!-- Anho Field -->
<div class="form-group col-sm-6">
    {!! Form::label('anho', 'Anho:') !!}
    {!! Form::text('anho', null, ['class' => 'form-control','id'=>'anho']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#anho').datetimepicker({
            format: 'YYYY-MM-DD',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Caratula Field -->
<div class="form-group col-sm-6">
    {!! Form::label('caratula', 'Caratula:') !!}
    {!! Form::text('caratula', null, ['class' => 'form-control']) !!}
</div>



<!-- Id Juzgado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_circunscripcion[]', 'Id circu:') !!}
    {!! Form::select('id_circunscripcion', $juzgados, null, ['multiple','class' => 'form-control custom-select']) !!}
</div>

<!-- Id Juzgado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_juzgado[]', 'Id Juzgado:') !!}
    {!! Form::select('id_juzgado', $juzgados, null, ['multiple','class' => 'form-control custom-select']) !!}
</div>
<!-- Id Juzgado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_clientes', 'Cliente:') !!}
    {!! Form::select('id_clientes', $clientes, null, ['multiple','class' => 'form-control custom-select']) !!}
</div>
