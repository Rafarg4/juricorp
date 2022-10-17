<div class="table-responsive">
    <table class="table" id="audiencias-table">
        <thead>
        <tr>
            <th>Expediente Id</th>
        <th>Inicio Audiencia</th>
        <th>Find Audiencia</th>
        <th>Descripcion Audiencia</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($audiencias as $audiencias)
            <tr>
                <td>{{ $audiencias->expediente_id }}</td>
            <td>{{ $audiencias->inicio_audiencia }}</td>
            <td>{{ $audiencias->find_audiencia }}</td>
            <td>{{ $audiencias->descripcion_audiencia }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['audiencias.destroy', $audiencias->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('audiencias.show', [$audiencias->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('audiencias.edit', [$audiencias->id]) }}"
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
