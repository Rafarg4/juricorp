<div class="table-responsive">
    <table class="table" id="circunscripcionJuzgados-table">
        <thead>
        <tr>
            <th>Id Juzgado</th>
        <th>Id Circunscripcion</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($circunscripcionJuzgados as $circunscripcionJuzgado)
            <tr>
                <td>{{ $circunscripcionJuzgado->id_juzgado }}</td>
            <td>{{ $circunscripcionJuzgado->id_circunscripcion }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['circunscripcionJuzgados.destroy', $circunscripcionJuzgado->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('circunscripcionJuzgados.show', [$circunscripcionJuzgado->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('circunscripcionJuzgados.edit', [$circunscripcionJuzgado->id]) }}"
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
