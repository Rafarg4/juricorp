<div class="table-responsive">
    <table class="table" id="example1">
        <thead>
        <tr>
             <th style="display:none;">id</th>
            <th>Concepto</th>
        <th>Monto</th>
        <th>Fecha</th>
        <th>Nro Expediente</th>
        <th>Archivo</th>
            <th>Accion</th>
        </tr>
        </thead>
        <tbody>
        @foreach($pagoExpedientes as $pagoExpediente)
            <tr>
                <td style="display:none;">{{ $pagoExpediente->id_expediente }}</td>
                <td >{{ $pagoExpediente->concepto }}</td>
            <td >{{number_format ($pagoExpediente->monto) }}</td>
            <td >{{ $pagoExpediente->fecha }}</td>
            <td>{{ $pagoExpediente->expediente->numero }}</td>
            <td 
            ><img src="{{ asset('storage').'/'.$pagoExpediente->archivo}}" width="50" height="50"></td>
                <td width="120">
                    {!! Form::open(['route' => ['pagoExpedientes.destroy', $pagoExpediente->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href=""  
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <button type="button" class="btn editarPagoA"><i class="far fa-eye"></i></button>
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
        <tfoot>
        <tr>
             <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td><b>Total de Pagos:</b></td>
                <td><b>{{number_format ($pago_total) }}</b></td>
    </tr>
  </tfoot>
    </table>
</div>





