<div class="table-responsive" style="padding:15px;">
    <table class="table" id="myTable2">
        <thead>
        <tr>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Ci</th>
        <th>Fecha Nacimiento</th>
        <th>Nacionalidad</th>
        <th>Distrito Origen</th>
        <th>Domicilio Particular</th>
        <th>Numero Casa</th>
        <th>Barrio</th>
        <th>Ciudad</th>
        <th>Numero Telefono</th>
        
            <th>Accion</th>
        </tr>
        </thead>
        <tbody>
        @foreach($clientes as $cliente)
            <tr>
                <td>{{ $cliente->nombre }}</td>
            <td>{{ $cliente->apellido }}</td>
            <td>{{ $cliente->ci }}</td>
            <td>{{ $cliente->fecha_nacimiento }}</td>
            <td>{{ $cliente->nacionalidad }}</td>
            <td>{{ $cliente->distrito_origen }}</td>
            <td>{{ $cliente->domicilio_particular ??'Sin asignar' }}</td>
            <td>{{ $cliente->numero_casa ??'Sin asignar' }}</td>
            <td>{{ $cliente->barrio ??'Sin asignar'}}</td>
            <td>{{ $cliente->ciudad ??'Sin asignar'}}</td>
            <td>{{ $cliente->numero_telefono ??'Sin asignar' }}</td>
           
                <td width="120">
                    {!! Form::open(['route' => ['clientes.destroy', $cliente->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('clientes.show', [$cliente->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('clientes.edit', [$cliente->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                         @can('ver-pago')

                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Estas seguro?')"]) !!}
                       @endcan
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
