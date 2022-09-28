<div class="table-responsive">
    <table class="table" id="expedienteDetalles-table">
        <thead>
        <tr>
            <th>Id Cliente</th>
        <th>Id Expediente</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($expedienteDetalles as $expedienteDetalle)
            <tr>
                <td>{{ $expedienteDetalle->id_cliente }}</td>
            <td>{{ $expedienteDetalle->id_expediente }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['expedienteDetalles.destroy', $expedienteDetalle->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('expedienteDetalles.show', [$expedienteDetalle->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('expedienteDetalles.edit', [$expedienteDetalle->id]) }}"
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
