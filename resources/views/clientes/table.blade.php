<div class="table-responsive" style="padding:15px;">
    <table class="table" id="myTable">
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
        <th>Email</th>
        <th>Rede Social</th>
        <th>Nombre Apellido Coyuge</th>
        <th>Ci Coyuge</th>
        <th>Empresa Otro</th>
        <th>Direccion</th>
        <th>Numero Casa</th>
        <th>Telefono Fijo</th>
        <th>Telefono Laboral</th>
        <th>Email Laboral</th>
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
            <td>{{ $cliente->domicilio_particular }}</td>
            <td>{{ $cliente->numero_casa }}</td>
            <td>{{ $cliente->barrio }}</td>
            <td>{{ $cliente->ciudad }}</td>
            <td>{{ $cliente->numero_telefono }}</td>
            <td>{{ $cliente->email }}</td>
            <td>{{ $cliente->rede_social }}</td>
            <td>{{ $cliente->nombre_apellido_coyuge }}</td>
            <td>{{ $cliente->ci_coyuge }}</td>
            <td>{{ $cliente->empresa_otro }}</td>
            <td>{{ $cliente->direccion }}</td>
            <td>{{ $cliente->numero_casa }}</td>
            <td>{{ $cliente->telefono_fijo }}</td>
            <td>{{ $cliente->telefono_laboral }}</td>
            <td>{{ $cliente->email_laboral }}</td>
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
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Estas seguro?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
