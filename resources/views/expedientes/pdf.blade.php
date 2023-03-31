<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <div class="card">
            <div class="card-body">
<h4>Expediente</h4>       
<div class="table-responsive" style="padding:15px;">
    <table class="table" id="myTable" >
        <thead>
        <tr>
        <th>Numero</th>
        <th>Año</th>
        <th>Caratula</th>
        <th>Circunscripcion</th>
        <th>Juzgado</th>
        <th>Cliente</th>
         <th>Estado</th>
        </tr>
        </thead>
        <tbody>
            <tr>
            <td>{{ $expediente->numero }}</td>
            <td>{{ $expediente->anho }}</td>
            <td>{{ $expediente->caratula }}</td>
            <td>{{ $expediente->circunscripcion->nombrecir }}</td>
            <td>{{ $expediente->juzgado->nombrejuz}}</td>
           <td> @foreach($expediente->clientes as $e)
            {{ $e->nombre}}
            @endforeach </td>
            <td>@switch(true)
            @case($expediente->estado == 'Activo')
            <span class="badge badge-primary"> {{ $expediente->estado }} </span>
            @break
            @case($expediente->estado == 'Paralizado')
            <span class="badge badge-warning"> {{ $expediente->estado }} </span>
            @break
            @case($expediente->estado == 'Finalizado' )
            <span class="badge badge-danger"> {{ $expediente->estado }} </span>
            @break
            @endswitch</td>
        
        </tbody>
    </table>
</div>  
    </div>
    <div class="card">
            <div class="card-body">
    <h4>Gastos</h4>
    <div class="table-responsive" style="padding:15px;">
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
<H4>Pagos</H4>
<div class="table-responsive" style="padding:15px;">
    <table class="table" id="pagoExpedientes-table">
        <thead>
        <tr>
        <th>Concepto</th>
        <th>Monto</th>
        <th>Fecha</th>
        <th>Nro expediente</th>
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
      <div class="col-lg-12">
                      
                          
                                <h3>Detalles de cuenta</h3>
                    
                             <div class="card-body">
                               <table class="table" id="myTabl">
                              <thead>
                              <tr>
                                  <th>Debe </th>
                              <th>Haberes</th>
                              <th>Saldo</th>
                             
                              </tr>
                              </thead>
                              <tbody>
                          
                                  <tr>
                                      <td>{{number_format ($gasto_total) }} Gs</td>
                                      <td>{{number_format ($pago_total) }} Gs</td>
                                       <td>@switch(true)
                                      @case($gasto_total <$pago_total)
                                      <span class="badge badge-success">Disponible {{number_format ($resultado=$pago_total-$gasto_total)}} Gs </span>
                                      @break
                                      @case($gasto_total>$pago_total)
                                      <span class="badge badge-danger">A pagar {{number_format ($resultado=$pago_total-$gasto_total)}} Gs</span>
                                      @break
                                      @case($gasto_total>$pago_total==0)
                                       <span class="badge badge-primary"> {{number_format ($resultado=$pago_total-$gasto_total)}} Gs</span>
                                      @break
                                      @endswitch</td>
                                 
                                </tr>
                              
                              </tbody>
                          </table>
                                
                            </div>
                      </div>
                
              </div> 
              </div>

