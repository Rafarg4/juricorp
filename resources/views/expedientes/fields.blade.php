
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
    {!! Form::label('anho', 'Año:') !!}
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

<div class="form-group col-sm-12">
    {!! Form::label('id_clientes', 'Cliente:') !!}
<div class="input-group">
   
    {!! Form::select('id_clientes', $clientes, null, ['multiple','class' => 'form-control custom-select']) !!}
  <div class="input-group-append">
    <button class="btn btn-primary" type="button" id="agregar"><i class="fa fas-solid fa-plus"></i></button>
     <button class="btn btn-success" type="button" id="agregar_nuevo"><i class="fa fas-solid fa-user-plus"></i></button>
  </div>
</div></div>

<div class="form-group col-sm-12">
        <table class="table table-bordered table-hover dataTable dtr-inline" id="tabla">

            <thead>
                <tr>
                    <th>Campo 1</th>
                    <th>Campo 2</th>
                    <th>Campo 3</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <td id="valor1">Valor 1</td>
                <td id="valor2">Valor 2</td>
                <td id="valor3 ">Valor 3</td>
                <td style="text-align: center;"> <button class="btn btn-danger" type="button"><i class="fa fas-solid fa-trash"></i></button></td>
            </tr>
            </tbody>
        </table>
    </div>



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script type="text/javascript">


$("#agregar").click(function() {
        insert




});
</script>