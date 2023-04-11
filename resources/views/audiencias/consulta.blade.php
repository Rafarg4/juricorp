@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Consulta de audiencias</h1>
                </div>
            </div>
        </div>
    </section>
    <div class="content px-3">
        <div class="card">
            <div class="card-body p-0">
                   <div class="table-responsive" style="padding:15px;">
    <table class="table" id="audiencias-consulta">
        
        <thead>
            <tr>
                <th>Nro Expediente</th>
                <th>Caratula</th>
                <th>Fecha de audiencia</th>
            </tr>
        </thead>
        <tbody>
         @foreach($audiencias as $audiencias)
            <tr>
              <td>{{ $audiencias->expediente->numero ?? 'Sin asignar'}}</td>
                <td>{{ $audiencias->descripcion_audiencia }}</td>
            <td>{{ $audiencias->inicio_audiencia }}</td>
          
            </tr>
        @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th>Nro Expediente</th>
                
            </tr>
        </tfoot>
    </table>
</div>
</div>
 
@endsection