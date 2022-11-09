<div class="table-responsive" style="padding:15px;">
    <table class="table" id="myTable2">
        <thead>
        <tr>
            <th>Nombre</th>
        <th>Juez</th>
        <th>Secretario</th>
          <th>Ujier</th>
          <th>telefono</th>
          <th>Circunscripcion</th>
            <th>Accion</th>
        </tr>
        </thead>
        <tbody>
        @foreach($juzgados as $juzgado)
            <tr>
                <td>{{ $juzgado->nombrejuz }}</td>
            <td>{{ $juzgado->juez }}</td>
            <td>{{ $juzgado->secretario }}</td>
               <td>{{ $juzgado->ujier }}</td>
                <td>{{ $juzgado->telefono }}</td>
             <td>{{ $juzgado->cir->nombrecir }}</td>
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
                        </a>@can('ver-pago')

                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Estas seguro?')"]) !!}
                        @endcan
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
