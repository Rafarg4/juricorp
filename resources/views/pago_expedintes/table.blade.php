<div class="table-responsive">
    <table class="table" id="pagoExpedintes-table">
        <thead>
        <tr>
            <th>Id Cliente</th>
        <th>Id Expediente</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($pagoExpedintes as $pagoExpedinte)
            <tr>
                <td>{{ $pagoExpedinte->id_cliente }}</td>
            <td>{{ $pagoExpedinte->id_expediente }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['pagoExpedintes.destroy', $pagoExpedinte->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('pagoExpedintes.show', [$pagoExpedinte->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('pagoExpedintes.edit', [$pagoExpedinte->id]) }}"
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
