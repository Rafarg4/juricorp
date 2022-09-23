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
            format: 'YYYY-MM-DD HH:mm:ss',
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

<!-- Id Circunscripcion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_circunscripcion', 'Id Circunscripcion:') !!}
    {!! Form::select('id_circunscripcion', $circunscripcions, null, ['class' => 'form-control custom-select']) !!}
</div>


<!-- Id Juzgado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_juzgado', 'Id Juzgado:') !!}
    {!! Form::select('id_juzgado', $juzgados, null, ['class' => 'form-control custom-select']) !!}
</div>
