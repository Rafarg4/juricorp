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
                <td style="display:none;" class="id_pago">{{ $pagoExpediente->id_expediente }}</td>
                <td class="concepto">{{ $pagoExpediente->concepto }}</td>
            <td class="monto">{{number_format ($pagoExpediente->monto) }}</td>
            <td class="fecha">{{ $pagoExpediente->fecha }}</td>
            <td class="numero">{{ $pagoExpediente->expediente->numero }}</td>
            <td class="img"><img src="{{ asset('storage').'/'.$pagoExpediente->archivo}}" width="50" height="50"></td>
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




<div class="modal fade" id="editarPago" tabindex="-1" role="dialog" aria-labelledby="editarPagoLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editarPagoLabel">Cargar un nuevo pago</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
   
  <div class="content px-3">

        @include('adminlte-templates::common.errors')

        <div class="card">

           <form>
            

            <div class="card-body">

                <div class="row">
                    @include('pago_expedientes.fields')
                </div>

            </div>

            <div class="card-footer">
              
               
            </div>

           

        </div>
    </div>
      <div class="modal-footer">
        
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          {!! Form::submit('Guardar', ['class' => 'btn btn-primary', 'id' => 'editarPagoBoton']) !!}
           </form>
      </div>
    </div>
  </div>
</div>
<script>
    $('.btn.editarPagoA').click(function(){

   var row = $(this).closest("tr");   // Find the row
    var concepto = row.find(".concepto").text();// Find the text
    var fecha = row.find(".fecha").text();
    var monto = row.find(".monto").text();
    var numero = row.find(".numero").text();
    var id = row.find(".id_pago").text();
    var archivo = row.find(".archivo").text();
   

     console.log(id);
    $('#concepto').val(concepto);
    $('#fecha').val(fecha);
    $('#monto').val(monto);
    $('#numero').val(numero);
    $('#id_expediente').val(id);
     $('#archivo').val(archivo);



    $('#editarPago').modal('toggle');
    });

    
    $('#editarPagoBoton').click(function(){
            var id_expediente = $('#id_expediente').val();
            var concepto_gasto = $('#concepto_gasto').val(); 
            var monto_gasto = $('#monto_gasto').val();
            var fecha_gasto = $('#fecha_gasto').val();
            var archivo_gasto = $('#archivo_gasto').val();
         
     $.ajax({
               type:'PATCH',
               url:'/pagoExpedientes',
               data:{  "_token": "{{ csrf_token() }}", concepto: concepto, monto: monto, fecha: fecha, id_expediente: id_expediente},
               success:function(data) {
                  $('#editarPago').modal('hide');
               }
            });

            });   
   
    // Let's test it out


   
   </script>
