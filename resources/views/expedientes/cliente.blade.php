@extends('layouts.app')

@section('content')

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Mi expediente</h1>
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
    <table class="table" id="myTable" >
        <thead>
        <tr>
        <th>Numero</th>
        <th>Caratula</th>
        <th>Año</th>
        <th>Cliente</th>
         <th>Estado</th>
        <th>Accion</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $expediente)
            <tr>
            <td>{{ $expediente->numero }}</td>
            <td>{{ $expediente->caratula }}</td>
            <td>{{ $expediente->anho }}</td>
            <td>{{ $expediente->name }}</td>
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
                 <td width="120">
                    {!! Form::open(['route' => ['expedientes.destroy', $expediente->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('expedientes.show', [$expediente->id_expediente]) }}"
                           class='btn btn-default btn-xs'>
                           <button type="button" class="btn btn-primary"> <i class="nav-icon fas fa-book"></i></button>
                        </a>
                          @can('ver-pago')
              <a href="{{route('pdf.show', $expediente->id)}}"
                           class='btn btn-default btn-xs'>
                           <button type="button" class="btn btn-success"> <i class="fa fas-solid fa-file-pdf"></i></button>
                        </a>
                     
                        <a href="{{ route('expedientes.edit', [$expediente->id]) }}"
                           class='btn btn-default btn-xs'>
                           <button type="button" class="btn btn-warning"> <i class="far fa-edit"></i></button>
                        </a>
                        
    
        
                        <form method="POST" action="{{ url("expedientes/{$expediente->id}") }}">
                          @csrf
                          @method('DELETE')
                          <a class="class='btn btn-default btn-xs">
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Estas seguro?')"><i class="fa fas-solid fa-trash"></i></button>
                        </form></a>
                         @endcan
                    </div>
                    {!! Form::close() !!}
                </td>
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

