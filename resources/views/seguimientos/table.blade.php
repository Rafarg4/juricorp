<div class="table-responsive" style="padding:15px;">
    <table class="table" id="myTable2">
        <thead>
        <tr>
            <th>Fecha</th>
        <th>Curso Actividad Expediente</th>
        <th>Escrito</th>
        <th>Proximo Paso</th>
        <th>Escrito Actualizado</th>
        <th>Preparado Por</th>
        <th>Controlado Por</th>
        <th>Supervision Text</th>
            <th>Accion</th>
        </tr>
        </thead>
        <tbody>
        @foreach($seguimientos as $seguimiento)
            <tr>
                <td>{{ $seguimiento->fecha }}</td>
            <td>{{ $seguimiento->curso_actividad_expediente }}</td>
            <td>{{ $seguimiento->escrito }}</td>
            <td>{{ $seguimiento->proximo_paso }}</td>
            <td>{{ $seguimiento->escrito_actualizado }}</td>
            <td>{{ $seguimiento->preparado_por }}</td>
            <td>{{ $seguimiento->controlado_por }}</td>
            <td>{{ $seguimiento->supervision }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['seguimientos.destroy', $seguimiento->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('seguimientos.show', [$seguimiento->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('seguimientos.edit', [$seguimiento->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
