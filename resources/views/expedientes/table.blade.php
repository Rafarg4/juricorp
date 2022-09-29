<div class="table-responsive">
    <table class="table" id="expedientes-table">
        <thead>
        <tr>
            <th>Numero</th>
        <th>Anho</th>
        <th>Caratula</th>
        <th>Id Circunscripcion</th>
        <th>Id Juzgado</th>
        <th>Id Cliente</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($expedientes as $expediente)
            <tr>
                <td>{{ $expediente->numero }}</td>
            <td>{{ $expediente->anho }}</td>
            <td>{{ $expediente->caratula }}</td>
            <td>{{ $expediente->id_circunscripcion }}</td>
            <td>{{ $expediente->id_juzgado}}</td>
              <td>{{ $expediente->id_cliente}}</td>
                <td width="120">
                    {!! Form::open(['route' => ['expedientes.destroy', $expediente->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('expedientes.show', [$expediente->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('expedientes.edit', [$expediente->id]) }}"
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
