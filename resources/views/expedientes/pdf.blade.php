<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <div class="card">
            <div class="card-body">
                
                  <!-- Numero Field -->
<div class="col-sm-6">
    {!! Form::label('numero', 'Numero:') !!}
    <p>{{ $expediente->numero }}</p>
</div>

<!-- Anho Field -->
<div class="col-sm-6">
    {!! Form::label('anho', 'Año:') !!}
    <p>{{ $expediente->anho }}</p>
</div>

<!-- Caratula Field -->
<div class="col-sm-6">
    {!! Form::label('caratula', 'Caratula:') !!}
    <p>{{ $expediente->caratula }}</p>
</div>

<!-- Id Circunscripcion Field -->
<div class="col-sm-6">
    {!! Form::label('id_circunscripcion', 'Circunscripcion:') !!}
    <p>{{ $expediente->circunscripcion->nombrecir }}</p>
</div>

<!-- Id Juzgado Field -->
<div class="col-sm-6">
    {!! Form::label('id_juzgado', 'Juzgado:') !!}
    <p>{{ $expediente->juzgado->nombrejuz }}</p>
</div>
<div class="col-sm-6">
    {!! Form::label('estado', 'Estado:') !!}
    <p>     @switch(true)
            @case($expediente->estado == 'Activo')
            <span class="badge badge-primary"> {{ $expediente->estado }} </span>
            @break
            @case($expediente->estado == 'Paralizado')
            <span class="badge badge-warning"> {{ $expediente->estado }} </span>
            @break
            @case($expediente->estado == 'Finalizado' )
            <span class="badge badge-danger"> {{ $expediente->estado }} </span>
            @break
            @endswitch</p>
</div>
<div class="col-sm-6">
    {!! Form::label('clientes', 'Clientes:', ['class'=>'lb-lg']) !!}
    <p>@foreach($expediente->clientes as $expediente)
            {{ $expediente->nombre}}
            @endforeach</p>
</div>
<!-- Created At Field -->
<div class="col-sm-6">
    {!! Form::label('created_at', 'Registrado en fecha:') !!}
    <p>{{ $expediente->created_at }}</p>
</div>  
         
    </div>
    <h4>Detalles de gastos</h4>
    <div class="table-responsive">
    <table class="table" id="gastoExpedientes-table">
        <thead>
        <tr>
            <th>Concepto</th>
        <th>Monto</th>
        <th>Fecha</th>
        <th>Nro de expediente</th>
       
           
        </tr>
        </thead>
        <tbody>
        @foreach($gastoExpedientes as $gastoExpediente)
            <tr>
                <td>{{ $gastoExpediente->concepto_gasto }}</td>
            <td>{{number_format($gastoExpediente->monto_gasto) }}</td>
            <td>{{ $gastoExpediente->fecha_gasto }}</td>
            <td>{{ $gastoExpediente->expediente->numero}}</td>
        
                
            </tr>
        @endforeach
        </tbody>
        <tfoot>
        <tr>
                <td></td>
                <td></td>
                <td><b>Total de Gastos:</b></td>
                <td><b>{{number_format ($gasto_total) }}</b></td>
    </tr>
  </tfoot>
    </table>
</div>
<H4>Detalles de pagos</H4>
<div class="table-responsive" style="padding:15px;">
    <table class="table" id="pagoExpedientes-table">
        <thead>
        <tr>
        <th>Concepto</th>
        <th>Monto</th>
        <th>Fecha</th>
        <th>Expediente</th>
        </tr>
        </thead>
        <tbody>
        @foreach($pagoExpedientes as $pagoExpediente)
            <tr>
                <td>{{ $pagoExpediente->concepto }}</td>
            <td>{{number_format ($pagoExpediente->monto) }}</td>
            <td>{{ $pagoExpediente->fecha }}</td>
            <td>{{ $pagoExpediente->expediente->numero }}</td>
          
            </tr>
        @endforeach
        </tbody>
         <tfoot>
        <tr>
                <td></td>
                <td></td>
                <td><b>Total de Pagos:</b></td>
                <td><b>{{number_format ($pago_total) }}</b></td>
    </tr>
  </tfoot>
    </table>
</div>
</div>

