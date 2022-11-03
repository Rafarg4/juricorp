


<div class="form-group col-sm-6">
    {!! Form::label('numero', 'Numero:') !!}
    {!! Form::number('numero', null, ['class' => 'form-control','required']) !!}
</div>

<!-- Anho Field -->
<div class="form-group col-sm-6">
    {!! Form::label('anho', 'Año:') !!}
    {!! Form::text('anho', null, ['class' => 'form-control','id'=>'anho','required']) !!}
</div>
<!-- Caratula Field -->
<div class="form-group col-sm-6">
    {!! Form::label('caratula', 'Caratula:') !!}
    {!! Form::text('caratula', null, ['class' => 'form-control','required']) !!}
</div>


<!-- Id Juzgado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_circunscripcion[]', 'Circunscripcion:') !!}
    <div class="input-group">
    {!! Form::select('id_circunscripcion', $circunscripcions, null, ['class' => 'form-control js-example-responsive','id' => 'circunscripcion','placeholder'=>'Seleccione','required']) !!}
 <div class="input-group-append">
     <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalc">
            <i class="fa fas-solid fa-plus"></i>
        </button>
        </div>

        </div>
</div>

<!-- Id Juzgado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_juzgado[]', 'Juzgado:') !!}
    <div class="input-group">
    {!! Form::select('id_juzgado', $juzgados, null, ['class' => 'form-control js-example-responsive','id' => 'juzgado','placeholder'=>'Seleccione','required']) !!}
 <div class="input-group-append">
     <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalj">
            <i class="fa fas-solid fa-plus"></i>
        </button>
        </div>

        </div>
</div>
<!-- Id Juzgado Field -->

<div class="form-group col-sm-6">

    {!! Form::label('clientes[]', 'Cliente:') !!}
    <div class="input-group">
    {!! Form::select('clientes[]', $clientes, null, ['multiple','class' => 'form-control js-example-responsive','id' => 'cliente','required']) !!}
    <div class="input-group-append">
     <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fas-solid fa-plus"></i>
        </button>
        </div>

        </div>
</div>
<div class=" form-group col-sm-6">
 {!! Form::label('estado', 'Estado:') !!}
{!! Form::select('estado',array('Activo' => 'Activo', 'Paralizado' => 'Paralizado','Finalizado' => 'Finalizado'),null, ['class' => 'form-control','placeholder'=>'Seleccione','required'])!!}
</div>
<!-- Button trigger modal -->




<!-- Button trigger modal -->

        