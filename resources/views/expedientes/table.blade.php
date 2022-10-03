<div class="table-responsive">
    <table class="table" id="expedientes-table">
        <thead>
        <tr>
            <th>Numero</th>
        <th>Año</th>
        <th>Caratula</th>
        <th>Circunscripcion</th>
        <th>Juzgado</th>
        <th>Cliente</th>
            <th>Accion</th>
        </tr>
        </thead>
        <tbody>
        @foreach($expedientes as $expediente)
            <tr>
            <td>{{ $expediente->numero }}</td>
            <td>{{ $expediente->anho }}</td>
            <td>{{ $expediente->caratula }}</td>
            <td>{{ $expediente->circunscripcion->nombre }}</td>
            <td>{{ $expediente->juzgado->nombre}}</td>
           <td> @foreach($expediente->clientes as $expediente)
            {{ $expediente->nombre}}
            @endforeach </td>
                 <td width="120">
                    {!! Form::open(['route' => ['expedientes.destroy', $expediente->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('expedientes.show', [$expediente->id]) }}"
                           class='btn btn-default btn-xs'>
                           <button type="button" class="btn btn-primary"> <i class="nav-icon fas fa-book"></i></button>
                        </a>
                        <a href="{{ route('expedientes.edit', [$expediente->id]) }}"
                           class='btn btn-default btn-xs'>
                           <button type="button" class="btn btn-warning"> <i class="far fa-edit"></i></button>
                        </a>
                        {!! Form::button('<button type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Estas seguro?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
