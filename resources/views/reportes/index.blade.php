@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Reporte</h1>
                </div>
                <div class="col-sm-6">
                    
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('flash::message')

        <div class="clearfix"></div>

        <div class="card">
            <div class="card-body p-0">
               <div class="table-responsive" style="padding:15px;">
    <table class="table" id="myTable2">
        <thead>
        <tr>
         <th>Numero</th>
        <th>Año</th>
        <th>Caratula</th>
        <th>Juzgado</th>
        <th>Cliente</th>
        <th>Estado</th>
        <th>Concepto</th>
        <th>Monto</th>
        <th>Fecha</th>
        </tr>
        </thead>
        <tbody>
        @foreach($reporte as $r)
            <tr>
                <td>{{ $r->numero }}</td>
            <td>{{ $r->anho }}</td>
            <td>{{ $r->caratula }}</td>
            <td>{{ $r->nombrecir }}</td>
           <td>{{ $r->cliente_nombre}}</td>
            <td>@switch(true)
            @case($r->estado == 'Activo')
            <span class="badge badge-primary"> {{ $r->estado }} </span>
            @break
            @case($r->estado == 'Paralizado')
            <span class="badge badge-warning"> {{ $r->estado }} </span>
            @break
            @case($r->estado == 'Finalizado' )
            <span class="badge badge-danger"> {{ $r->estado }} </span>
            @break
            @endswitch</td>
             <td>{{ $r->concepto_gasto }}</td>
            <td>{{number_format ($r->monto_gasto) }}</td>
            <td>{{ $r->fecha_gasto }}</td>
             
            </tr>
        @endforeach
        </tbody>
    </table>
</div>


                <div class="card-footer clearfix">
                    <div class="float-right">
                        
                    </div>
                </div>
            </div>

        </div>
    </div>

  
@endsection

