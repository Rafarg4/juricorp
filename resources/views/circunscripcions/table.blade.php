        <div class="table-responsive" style="padding:15px;">
    <table class="table" id="myTable">
        <thead>
        <tr>
            <th>Nombre</th>
        <th>Departamento</th>
            <th >Accion</th>
        </tr>
        </thead>
        <tbody>
        @foreach($circunscripcions as $circunscripcion)
            <tr>
                <td>{{ $circunscripcion->nombrecir}}</td>
            <td>{{ $circunscripcion->departamento }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['circunscripcions.destroy', $circunscripcion->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('circunscripcions.show', [$circunscripcion->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('circunscripcions.edit', [$circunscripcion->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        @can('ver-pago')
                        @if ($circunscripcion->juz_count==0)
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Estas seguro?')"]) !!}
                        @endif
                        @endcan
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
