<div class="table-responsive">
    <table class="table" id="gastoExpedientes-table">
        <thead>
        <tr>
            <th>Concepto</th>
        <th>Monto</th>
        <th>Fecha</th>
        <th>Nro de expediente</th>
        <th>Archivo</th>
            <th>Accion</th>
        </tr>
        </thead>
        <tbody>
        @foreach($gastoExpedientes as $gastoExpediente)
            <tr>
                <td>{{ $gastoExpediente->concepto_gasto }}</td>
            <td>{{ $gastoExpediente->monto_gasto }}</td>
            <td>{{ $gastoExpediente->fecha_gasto }}</td>
            <td>{{ $gastoExpediente->expediente->numero}}</td>
            <td>{{ $gastoExpediente->archivo_gasto }}</td>
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
        <tfoot>
        <tr>
             <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td><b>Total de Gastos:</b></td>
                <td><b>{{ $gasto_total }}</b></td>
    </tr>
  </tfoot>
    </table>
</div>
