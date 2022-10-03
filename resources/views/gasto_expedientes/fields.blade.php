
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>

<!-- (Optional) Latest compiled and minified JavaScript translation files -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/i18n/defaults-*.min.js"></script>
<!-- Numero Field -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<!-- Concepto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('concepto', 'Concepto:') !!}
    {!! Form::text('concepto', null, ['class' => 'form-control']) !!}
</div>

<!-- Monto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('monto', 'Monto:') !!}
    {!! Form::number('monto', null, ['class' => 'form-control']) !!}
</div>

<!-- Fecha Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha', 'Fecha:') !!}
    {!! Form::text('fecha', null, ['class' => 'form-control','id'=>'fecha']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#fecha').datetimepicker({
            format: 'YYYY-MM-DD',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Id Expediente Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_expediente', 'Id Expediente:') !!}
    {!! Form::select('id_expediente', $expediente, null, ['class' => 'form-control custom-select']) !!}
</div>


<!-- Archivo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('archivo', 'Archivo:') !!}
    {!! Form::text('archivo', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group col-sm-12">
        <table class="table table-bordered table-hover dataTable dtr-inline" id="tabla">

            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>C.i</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <td> {!! Form::select('clientes[]', $expediente, null, ['array','multiple','class' => 'form-control custom-select']) !!}</td>
                <td><input type="text" name="apllido[]" class="form-control"></td>
                <td><input type="text" name="ci[]" class="form-control"></td>
                <td><button class="btn btn-success" type="button" id="agregar_nuevo"><i class="fa fas-solid fa-user-plus"></i></button></td>
            </tr>
            </tbody>
        </table>
    </div>

<script type="text/javascript">
$(document).ready(function(){
    $('#agregar_nuevo').on('click',function(){
        var html='';
        html+='<tr>'
       
        html+='<td><input type="text" name="apellido[]" class="form-control"></td>';
        html+='<td><input type="text" name="ci[]" class="form-control"></td>';
        html+='<td><button class="btn btn-danger" type="button" id="eliminar"><i class="fa fas-solid fa-trash"></i></button></td>';
        html+='</tr>';
        $('tbody').append(html);
    })

    });
        $(document).on('click','#eliminar',function(){
            $(this).closest('tr').remove();

        });

</script>