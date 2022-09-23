<div class="table-responsive">
    <table class="table" id="juzgados-table">
        <thead>
        <tr>
            <th>Nombre</th>
        <th>Juez</th>
        <th>Secretario</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($juzgados as $juzgado)
            <tr>
                <td>{{ $juzgado->nombre }}</td>
            <td>{{ $juzgado->juez }}</td>
            <td>{{ $juzgado->secretario }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['juzgados.destroy', $juzgado->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('juzgados.show', [$juzgado->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('juzgados.edit', [$juzgado->id]) }}"
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
