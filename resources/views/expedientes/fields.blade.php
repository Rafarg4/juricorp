
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>

<!-- (Optional) Latest compiled and minified JavaScript translation files -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/i18n/defaults-*.min.js"></script>
<!-- Numero Field -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

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
            format: 'YYYY',
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
    {!! Form::label('id_circunscripcion[]', 'Circunscripcion:') !!}
    {!! Form::select('id_circunscripcion', $circunscripcions, null, ['multiple','class' => 'form-control custom-select']) !!}
</div>

<!-- Id Juzgado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_juzgado[]', 'Juzgado:') !!}
    {!! Form::select('id_juzgado', $juzgados, null, ['multiple','class' => 'form-control custom-select']) !!}
</div>
<!-- Id Juzgado Field -->

<div class="form-group col-sm-6">
    {!! Form::label('clientes[]', 'Cliente:') !!}
 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fas-solid fa-plus"></i>
        </button>
    {!! Form::select('clientes[]', $clientes, null, ['array','multiple','class' => 'form-control custom-select']) !!}

</div>
<!-- Button trigger modal -->
       
 <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
           <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>Create Juzgado</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('adminlte-templates::common.errors')

        <div class="card">

            {!! Form::open(['route' => 'juzgados.store']) !!}

            <div class="card-body">

                <div class="row">
                    @include('juzgados.fields')
                </div>

            </div>

            <div class="card-footer">
                   {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
               
            </div>

            {!! Form::close() !!}

        </div>
    </div>
        </div>
    </div>
     