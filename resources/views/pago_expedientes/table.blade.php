<div class="table-responsive">
    <table class="table" id="pagoExpedientes-table">
        <thead>
        <tr>
            <th>Concepto</th>
        <th>Monto</th>
        <th>Fecha</th>
        <th>Expediente Id</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($pagoExpedientes as $pagoExpediente)
            <tr>
                <td>{{ $pagoExpediente->concepto }}</td>
            <td>{{ $pagoExpediente->monto }}</td>
            <td>{{ $pagoExpediente->fecha }}</td>
            <td>{{ $pagoExpediente->expediente_id }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['pagoExpedientes.destroy', $pagoExpediente->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('pagoExpedientes.show', [$pagoExpediente->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('pagoExpedientes.edit', [$pagoExpediente->id]) }}"
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
