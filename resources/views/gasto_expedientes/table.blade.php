<div class="table-responsive">
    <table class="table" id="gastoExpedientes-table">
        <thead>
        <tr>
            <th>Concepto</th>
        <th>Monto</th>
        <th>Fecha</th>
        <th>Id Expediente</th>
        <th>Archivo</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($gastoExpedientes as $gastoExpediente)
            <tr>
                <td>{{ $gastoExpediente->concepto }}</td>
            <td>{{ $gastoExpediente->monto }}</td>
            <td>{{ $gastoExpediente->fecha }}</td>
            <td>{{ $gastoExpediente->id_expediente }}</td>
            <td>{{ $gastoExpediente->archivo }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['gastoExpedientes.destroy', $gastoExpediente->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('gastoExpedientes.show', [$gastoExpediente->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('gastoExpedientes.edit', [$gastoExpediente->id]) }}"
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
